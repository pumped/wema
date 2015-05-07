
function TimelineManager() {
	this.startYear = 0;
	this.currentYear = this.startYear;
	this.endYear = 65;
	this.playbackSpeed = 200;
	this.loop = false;
	this.data = null;

	this.modelManager = new ModelManager();
}

TimelineManager.prototype.setConsole = function(cons) { 
	this.console = cons;
	this.modelManager.setConsole(cons);
};

TimelineManager.prototype.setMapController = function(mapController) { 
	this.mapController = mapController;
	this.modelManager.setMapController(mapController);
};


TimelineManager.prototype.setup = function() {
	this.setupPlaybackBar();

	//setup timelines
	var that = this;
	$.getJSON(this.modelManager.url+'/getTimeline', function(data){ 
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

TimelineManager.prototype.setID = function(id) {
	this.id = id;
	this.modelManager.setID(id);
	data = this.getData(this.id);

	//adjust stats
	this.updateStats();
};

TimelineManager.prototype.setYear = function(year) {
	if (this.currentYear != year) {
		this.currentYear = year;
		this.slider.slider('setValue',year);

		//adjust layers
		this.mapController.showLayer(year-this.startYear);

		//adjust stats
		//this.updateStats();
	}
};

TimelineManager.prototype.updateStats = function() {

	data = this.getData(this.id);	
	idx = this.currentYear - (this.startYear); // + parseInt(data.startTime));

	if (idx >= 0) {
		invArea = data.invStats[idx];
		
		$('#costDisplay .value').html("0");
		$('#yearDisplay .value').html(this.currentYear);
		$('#invAreaDisplay .value').html(invArea);
		//$('#restCostDisplay .value').html("$"+(invArea*600));
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

	this.currentData = this.dataSearch(this.data[0], id);
	console.log(this.currentData);
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