var mc = new MapController();
var iface = new InterfaceManager();
var years = [0,49];

$('document').ready(function(){
	mc.setupMap();
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
	this.timeline = new TimelineManager();
	this.timeline.setConsole(this.console);
	this.timeline.setMapController(mc);
}

InterfaceManager.prototype.setup = function(mode) {
	//setup mode buttons
	$('.navbar-nav a').click(function(){
		button = this.href.split('#')[1];
		iface.setMode(button);
	});

	this.tools.setup();

	//setup timeline manager
	this.timeline.setup();

	var that = this;

	//setup zone manager events
	this.zones = new ZoneManager();
	this.zones.onChange(function updateMapZone(zoneID) {
		mc.setZone(zoneID);
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
	this.callbacks;
	this.controls = {}; // {ID:button}
	this.mode = {
		'edit':{
			'drawTool': 0,
			'pointTool': 1,
			'editTool': 1,
			'removeTool': 1
		},
		'zone':{
			'drawTool': 1,
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
	this.bind('drawTool','zone');

	$('#drawTool').click(function() {
		that._draw("zone");
	});
};

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

ToolbarManager.prototype.onInteraction = function (type,callback) {
	this.callbacks[type] = callback;
};

// bind a button to a map interaction mode
// toggles map setInteractionMode()
ToolbarManager.prototype.bind = function(buttonID,modeID) {
	this.controls[buttonID] = modeID;

	//bind click function
	var that = this;
	$('#'+buttonID).click(function(){
		that.toggle(buttonID);
	});
};

ToolbarManager.prototype.bindOnMode = function(ID,button,zone) {

};

ToolbarManager.prototype.toggle = function(ID) {

	//get currently Active tool
	var active = false;
	if (this.mc.getInteractionMode() != false) {
		active = true;
	}

	//deactivate all tools
	/*this.mc.setInteractionMode(false);
	for (id in this.controls) {
		this.deactivate(id);
	}*/

	//turn on/off required tool
	callback = this.controls[ID];
	if (active) {
			this.deactivate(ID);
  	} else {
  		this.activate(ID);
  	}
};

ToolbarManager.prototype.activate = function(ID) {
	//set map controller mode
	mode = this.controls[ID];
	this.mc.setInteractionMode(mode);

	//change button state
	$('#'+ID).addClass('active');

	if (ID == 'drawTool') {
		$('.zoneBtns').slideDown();
	}
};

ToolbarManager.prototype.deactivate = function(ID) {
	mode = this.controls[ID];
	this.mc.setInteractionMode(false);

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
