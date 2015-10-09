
function TimelineManager(url) {
	this.startYear = 0;
	this.currentYear = this.startYear;
	this.endYear = 29;
	this.playbackSpeed = 200;
	this.loop = false;
	this.data = null;
	this.url = url;

	this.callbacks = {};
}

TimelineManager.prototype.setConsole = function(cons) {
	this.console = cons;
	//this.modelManager.setConsole(cons);
};

TimelineManager.prototype.setMapController = function(mapController) {
	this.mapController = mapController;
	//this.modelManager.setMapController(mapController);
};


TimelineManager.prototype.setup = function() {
	this.setupPlaybackBar();

	//setup timelines
	var that = this;
	$.getJSON(this.url+'/getTimeline', function(data){
		that.timeline = new Timeline(data);
		that.data = data;
		that.setID(data[0].ID);
		that.timeline.drawTimeline('timelines');
		that.timeline.clickBind(function(id, year){
			that.setID(id);
			data = that.getData(id);
			year = year - data.startTime;
			that.setYear(year);
		});

	});

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

TimelineManager.prototype.getID = function(id) {
	return this.id;
}

TimelineManager.prototype.setID = function(id) {
	this.id = id;
	//this.modelManager.setID(id);
	//data = this.getData(this.id);

	//adjust stats
	this.updateStats();

	//fire callback
	this._event("timelineChange",{"id":id});
};

TimelineManager.prototype.setYear = function(year) {
	if (this.currentYear != year) {
		this.currentYear = year;
		this.slider.slider('setValue',year);

		//adjust layers
		this.mapController.setVisTime(year-this.startYear);

		//adjust stats
		//this.updateStats();
	}
};

TimelineManager.prototype.updateStats = function() {
	var data = this.getData(this.id);
	if (data) {
		var idx = this.currentYear - (this.startYear); // + parseInt(data.startTime));

		if (idx >= 0) {
			var invArea = data.invStats[idx];

			$('#costDisplay .value').html("0");
			$('#yearDisplay .value').html(this.currentYear);
			$('#invAreaDisplay .value').html(invArea);
			//$('#restCostDisplay .value').html("$"+(invArea*600));
		}
	} else {
		console.warn("Timeline Manager - (updateStats): no data found");
	}
};

function smoothVal(selector, val) {
	oldVal = parseInt($(selector).html());


}

TimelineManager.prototype.getData = function(id) {
	if (this.currentData) {
		if (this.currentData.ID == id) {
			return this.currentData;
		}
	}

	console.log(this.data);
	if (this.data != null) {
		this.currentData = this.dataSearch(this.data[0], id);
		return this.currentData;
		console.log(this.currentData);
	}

	return null;
};

TimelineManager.prototype.dataSearch = function(data,id) {
	if (data.ID == id) {
		return data;
	}

	for (var i=0;i<data['children'].length;i++) {
		child = this.dataSearch(data['children'][i], id);
		if (child != 0) {
			return child;
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
