
function TimelineManager(url) {
	this.startYear = 0;
	this.currentYear = this.startYear;
	this.endYear = 30;
	this.playbackSpeed = 300;
	this.loop = false;
	this.data = null;
	this.url = url;

	this.speciesID = 0;

	this.callbacks = {};
}

TimelineManager.prototype.setConsole = function(cons) {
	this.console = cons;
};

TimelineManager.prototype.setMapController = function(mapController) {
	this.mapController = mapController;
};

TimelineManager.prototype.expandGraph = function(expand) {
	if (expand) {
		this.playGraph.expandGraph();
	} else {
		this.playGraph.shrinkGraph();
	}
}


TimelineManager.prototype.setup = function() {
	this.setupPlaybackBar();

	//setup timelines
	var that = this;

	this.timelineSwitcher = new TimelineOverview("timelines");
	this.timelineSwitcher.setBaseID("0");

	this.timelineSwitcher.on("timelineChanged",function(id){
		that.setID(id);
	})

	this.playGraph = new GraphTimeline("playbackGraph");
	this.playGraph._setupExpander("#timelineExpander .expHandle");
	//this.playGraph.setData([]);
	//this.playGraph.setBaseID("0");
	this.playGraph.setID("1");

	this.review = new Review();

	//get default data
	$.getJSON(this.url+'?r=getTimeline&species='+this.speciesID+'&timeline='+this.id, function(data){
		that.data = [data];
		that.playGraph.setData(that.data);
		that.playGraph.setBaseID("0");
		that.setID("1");

		that.timelineSwitcher.setData(that.data);

		that.review.setData(data);
		that.review.setID("1");
	});

	var updateStats = throttle(function(){
		console.log("throttle");
		var data = that.evtData;
		that.playGraph.setTimelineData(data.data.timelineID,data.data.state);
		that.timelineSwitcher.setData(that.data);
		that.review.update();
		that._event("graphData",that.data);
	},800,that);

	var ws = new ReconnectingWebSocket('ws://localhost:8082/ws');
	var $message = $('#message');
	ws.onopen = function(){
		console.log("socket opened");
	};
	ws.onmessage = function(ev){
		var data = JSON.parse(ev.data);
		console.log(data);
		if (data.event == "timeline_state") {
			that.evtData = data;
			updateStats();
		}
		if (data.event == "time_rendered") {
			that.setYear(data.data.time,true);
		}
		if (data.event == "model_complete") {
			$('#runModel i').removeClass('fa-pulse');
		}
	};
	ws.onclose = function(ev){
		console.log("socket closed");
	};
	ws.onerror = function(ev){
		//console.log("socket error");
	};

};



//fire callbacks
TimelineManager.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
}

//set callback
TimelineManager.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
}

TimelineManager.prototype.setupPlaybackBar = function() {
	this.slider = $('#timeSlider');

	this.slider.slider({
		min:this.startYear,
		max:this.endYear,
		step:1,
		value: this.currentYear
	});

	this.slider.on("slide",
		{self:this},
		function(ev) {
			ev.data.self.setYear(ev.value);
		});

	//bind buttons
	$('#playback').click({self:this},function(event){
		event.data.self.togglePlay();
		return false;
	});
};

TimelineManager.prototype.setSpeciesID = function (id) {
	this.speciesID = id;
};

TimelineManager.prototype.getID = function(id) {
	return this.id;
}

TimelineManager.prototype.setID = function(id) {
	this.id = id;
	if (this.playGraph) {
		this.playGraph.setID(id);
	}
	if (this.review) {
		this.review.setID(id);
	}

	if (this.timelineSwitcher) {
		this.timelineSwitcher.setID(id);
	}

	//this.modelManager.setID(id);
	//data = this.getData(this.id);

	//adjust stats
	this.updateStats();

	//fire callback
	this._event("timelineChange",{"id":id});
};

TimelineManager.prototype.setYear = function(year,quick) {
	if (this.currentYear != year) {
		this.currentYear = year;
		this.slider.slider('setValue',year);

		//adjust layers
		this.mapController.setVisTime(year-this.startYear,quick);

		//adjust stats
		this.updateStats();
	}
};

TimelineManager.prototype.updateStats = function() {
	var data = this.getData(this.id);
	if (data) {
		var idx = this.currentYear; // + parseInt(data.startTime));

		if (idx >= 0) {
			var invArea = data.occupied[idx];

			//var cost = this._calculateCosts(data,idx);
			var cost = this.review.getCostsAt(idx,false);
			var costSummary = this.review.getCostsAt(idx,true);

			$('#costDisplay .value').html(String(numberWithCommas(cost)));
			$('#cumulativeCostDisplay .value').html(String(numberWithCommas(costSummary)));
			$('#yearDisplay .value').html(this.currentYear);
			$('#invAreaDisplay .value').html(invArea);
			//$('#restCostDisplay .value').html("$"+(invArea*600));
		}
	} else {
		console.warn("Timeline Manager - (updateStats): no data found");
	}
};

/*TimelineManager.prototype._calculateCosts = function(data,idx) {

	var indexes = ["ap_range","c_range"];
	var costs = [500,100];
	var cost = 0;

	indexes.forEach(function(element,i) {
		if (data.hasOwnProperty(element)) {
			cost += data[element][idx] * costs[i];
		}
	});


	return cost;
}*/

function smoothVal(selector, val) {
	oldVal = parseInt($(selector).html());


}

TimelineManager.prototype.getData = function(id) {
	if (this.currentData) {
		if (this.currentData.ID == id) {
			return this.currentData;
		}
	}

	if (this.data != null) {
		this.currentData = this.dataSearch(this.data[0], id);
		return this.currentData;
		console.log(this.currentData);
	}

	return null;
};

TimelineManager.prototype.nextID = function() {
	//search data
	var newID = this.highestID(this.data[0]);
	return newID+1;
};

TimelineManager.prototype.highestID = function(data) {
	if (data.hasOwnProperty("ID")) {
		var highest = parseInt(data.ID);
		//search children
		if (data.hasOwnProperty("children")){
			for (var i=0;i<data['children'].length;i++) {
				var child = this.highestID(data['children'][i]);
				if (child > highest) {
					highest = child;
				}
			}
		}
		return highest;
	}
	return 0;
};

TimelineManager.prototype.dataSearch = function(data,id) {
	if (!data || !data.hasOwnProperty("ID")) {
		return 0;
	}

	if (data.ID == id) {
		return data;
	}
	if (data.hasOwnProperty('children'))	{
		for (var i=0;i<data['children'].length;i++) {
			child = this.dataSearch(data['children'][i], id);
			if (child != 0) {
				return child;
			}
		}
	}
	return 0;
};

TimelineManager.prototype.getYear = function() {
	return this.currentYear;
};

TimelineManager.prototype.togglePlay = function() {
	if (this.playing) {
		this.stop();
	} else {
		this.play();
	}
};

TimelineManager.prototype.play = function () {
	this.playing = true;
	$('#playback .glyphicon').removeClass('glyphicon-play');
	$('#playback .glyphicon').addClass('glyphicon-pause');

	//playback code
	//if at the end restart from the beginning with a delay
	if (this.currentYear >= this.endYear) {
		this.setYear(this.startYear);
		var that = this;
		setTimeout(function(){that.playback()},this.playbackSpeed);
	} else {
		this.playback();
	}

	return false;
};

//code that iterates through the years
TimelineManager.prototype.playback = function() {
	if (this.playing) {
		this.setYear(this.currentYear+1);
		if (this.currentYear < this.endYear) {
			var that = this;
			setTimeout(function(){that.playback()},this.playbackSpeed);
		} else {
			if (this.loop) {
				this.currentYear = this.startYear;
				var that = this;
				setTimeout(function(){that.playback()},this.playbackSpeed);
			} else {
			this.stop();
			}
		}
	}
};

TimelineManager.prototype.stop = function() {
	this.playing = false;
	$('#playback .glyphicon').removeClass('glyphicon-pause');
	$('#playback .glyphicon').addClass('glyphicon-play');
};

function throttle(fn, threshhold, scope) {
  threshhold || (threshhold = 250);
  var last,
      deferTimer;
  return function () {
    var context = scope || this;

    var now = +new Date,
        args = arguments;
    if (last && now < last + threshhold) {
      // hold on to it
      clearTimeout(deferTimer);
      deferTimer = setTimeout(function () {
        last = now;
        fn.apply(context, args);
      }, threshhold);
    } else {
      last = now;
      fn.apply(context, args);
    }
  };
}
