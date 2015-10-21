var mc = new MapController();
var iface = new InterfaceManager();

$('document').ready(function(){
	iface.setup();

    iface.console.write('Map Initialised');

	//set current mode
	if ( window.location.hash ) {
    	$(window.location.hash).click();
	}

});

function InterfaceManager() {
	this.console = new Console();
	this.tools = new ToolbarManager(mc);
	this.modelManager = new ModelManager();

	this.timeline = new TimelineManager(this.modelManager.url);
	this.timeline.setConsole(this.console);
	this.timeline.setMapController(mc);
}

InterfaceManager.prototype.setup = function(mode) {
	var that = this;

	//set default species and ID
	this.speciesID = "siam";

	this.timeline.setSpeciesID(this.speciesID);
	this.timeline.setID("1");

	//setup map controller
	mc.setSpecies(this.speciesID);
	mc.setupMap();
	mc.setVisTimeline("1");

	this.timeline.on("timelineChange",function updateMapTimeline(data){
		if (data.hasOwnProperty("id")) {
			mc.setVectorTimeline(data.id);
		} else {
			console.warn("Timeline Change event doesn't have an ID");
		}
	});

	//setup timeline manager
	this.timeline.setup();

	//setup mode buttons
	$('.navbar-nav a').click(function(){
		button = this.href.split('#')[1];
		iface.setMode(button);
	});

	//setup toolbars
	this.tools.setup();

	//setup zone manager events
	this.zones = new ZoneManager();
	this.zones.onChange(function updateMapZone(zoneID) {
		mc.setZone(zoneID);
	});

	this.tools.on("save",function saveState(e) {
		var timeline = that.timeline.getID();
		var species = that.speciesID;
		//console.log(timeline);
		that.modelManager.saveState(species,timeline);
		mc.setVisTimeline(timeline);
	});

};

InterfaceManager.prototype.setMode = function(mode) {
	//set ui
	mc.setMode(mode);
/*	if (mode == 'edit') {
		mc.editMode();
	} else if (mode == 'zone') {
		mc.zoneMode();
	} else if (mode == 'plan') {
		mc.planMode();
	} else if (mode == 'overview') {
		mc.overviewMode();
	} else {
		return;
	}*/

	//stop playback
	this.timeline.stop();

	//set toolbars
	this.tools.setMode(mode);

	//setup buttons
	$('.navbar-nav li').removeClass('active');
	$('#'+mode).parent().addClass('active');
};



/*--- Toolbar Buttons ---*/
function ToolbarManager(mc) {
	this.mc = mc;
	this.callbacks = {};
	this.controls = {}; // {ID:button}
	this.mode = {
		'edit':{
			'drawTool': 0,
			'polygonTool':1,
			'pointTool': 1,
			'editTool': 1,
			'removeTool': 1
		},
		'zone':{
			'drawTool': 1,
			'polygonTool':0,
			'pointTool':0,
			'editTool': 1,
			'removeTool': 1
		}
	};

	//bind draw buttons
}

ToolbarManager.prototype.setup = function () {
	var that = this;
	//setup draw button
	this.bind('drawTool','draw');
	this.bind('editTool','edit');
	this.bind('removeTool','delete');
	this.bind('pointTool','point');
	this.bind('polygonTool','polygon');


	$('#drawTool').click(function() {
		that._draw("zone");
	});

	$('#saveState').click(function saveButtonClick() {
		//run model
		that._event("save",null);
	})

};

ToolbarManager.prototype._event = function(type,evt) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](evt);
			}
		}
	}
}

ToolbarManager.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
}

ToolbarManager.prototype.setMode = function(mode) {
	//edit toolbar
	if (mode == 'zone' || mode == 'edit') {
		$('#editTools').slideDown();
	} else {
		$('#editTools').slideUp();
	}

	//timeline
	if (mode == 'plan' || mode == 'zone') {
		$('#timeline').slideDown();
	} else {
		$('#timeline').slideUp();
	}

	//return if no more settings
	if (!this.mode[mode]) {
		return;
	}

	//show tools
	for (var i in this.mode[mode]) {
		if (this.mode[mode][i] == 0){
			$('#'+i).hide();
		} else {
			$('#'+i).show();
		}
	}
};

ToolbarManager.prototype._draw = function(mode) {
	if (mode == "draw") {
		console.log("draw");
	}
}
/*
ToolbarManager.prototype.onInteraction = function (type,callback) {
	this.callbacks[type] = callback;
};*/

// bind a button to a map interaction mode
// toggles map setInteractionMode()
ToolbarManager.prototype.bind = function(buttonID,type) {
	this.controls[buttonID] = type;

	//bind click function
	var that = this;
	$('#'+buttonID).click(function(){
		that.toggle(buttonID);
	});
};

ToolbarManager.prototype.bindOnMode = function(ID,button,zone) {

};

ToolbarManager.prototype.toggle = function(ID) {
	console.log(ID);
	//get currently Active tool
	var active = false;
	if ($('#'+ID).hasClass('active')) {
		active = true;
	}

	//deactivate all tools
	this.mc.setInteractionMode(false);
	for (id in this.controls) {
		this.deactivate(id);
	}

	//turn on/off required tool
	callback = this.controls[ID];
	if (active) {
			//this.deactivate(ID);
  	} else {
  		this.activate(ID);
  	}
};

ToolbarManager.prototype.activate = function(ID) {
	//set map controller mode
	var type = this.controls[ID];
	this.mc.setInteractionMode(type);

	//change button state
	$('#'+ID).addClass('active');

	if (ID == 'drawTool') {
		$('.zoneBtns').slideDown();
	}
};

ToolbarManager.prototype.deactivate = function(ID) {
	var mode = this.controls[ID];
	//this.mc.setInteractionMode(false);

	//change button state
	$('#'+ID).removeClass('active');

	if (ID == 'drawTool') {
		$('.zoneBtns').slideUp();
	}
};



/*--- Zone Manager ---*/
function ZoneManager() {
	this.setup();
	this.currentMode = 'IC';
	this.changeCallback;
}

//return current zone
ZoneManager.prototype.mode = function() {
	return this.currentMode;
};

ZoneManager.prototype.onChange = function(callback) {
	this.changeCallback = callback;
}

ZoneManager.prototype.setMode = function(mode) {
	this.currentMode = mode;
	if (typeof this.changeCallback === "function") {
		var zone = zoneIDLookup.indexOf(mode);
		this.changeCallback(zone);
	}
};

//setup draw
ZoneManager.prototype.draw = function () {
	$('.zoneBtns').slideDown();
};

ZoneManager.prototype.endDraw = function() {
	$('.zoneBtns').slideUp();
};

ZoneManager.prototype.setup = function() {
	//setup buttons
	var that = this;
	$('.zoneBtn').click(function(){
		that.setMode($(this).attr('ID').split('zone')[0]);
	});
};

ZoneManager.prototype.setZone = function() {

};
