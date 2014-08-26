var zones;
mc = new MapController();
var iface = new InterfaceManager();
var years = [2014,2053];

$('document').ready(function(){

	zones = new ZoneManager();
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
	this.tools = new ToolbarManager();
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

	//setup draw button
	$('#draw').click(function() {

	});

	//setup timeline manager
	this.timeline.setup();
	
}

InterfaceManager.prototype.setMode = function(mode) {
	//set ui
	if (mode == 'edit') {
		mc.editMode();
	} else if (mode == 'zone') {
		mc.zoneMode();
	} else if (mode == 'plan') {
		mc.planMode();
	} else if (mode == 'overview') {
		mc.overviewMode();
	} else {
		return;
	}

	//stop playback
	this.timeline.stop();

	//setup buttons
	$('.navbar-nav li').removeClass('active');
	$('#'+mode).parent().addClass('active');

	console.log('changed mode')
}



/*--- Toolbar Buttons ---*/
function ToolbarManager() {
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
	}
}

ToolbarManager.prototype.setMode = function(mode) {
	
	//edit toolbar
	if (mode == 'zone' || mode == 'edit') {
		$('#editTools').slideDown();
	} else {
		$('#editTools').slideUp();
		console.log('tools hidden');
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
	for (i in this.mode[mode]) {
		if (this.mode[mode][i] == 0){
			$('#'+i).hide();
		} else {
			$('#'+i).show();
		}		
	}
}

ToolbarManager.prototype.bind = function(ID,button) {
	this.controls[ID] = button;

	tbm = this;
	$('#'+ID).click(function(){
		tbm.toggle(ID);
	});
}

ToolbarManager.prototype.bindOnMode = function(ID,button,zone) {

}

ToolbarManager.prototype.toggle = function(ID) {
	//deactivate all tools
	for (id in this.controls) {
		if (id != ID) {
			this.deactivate(id);
		}
	}

	button = this.controls[ID];
	if (button.active) {    	
		this.deactivate(ID);
  	} else {
  		this.activate(ID);
  	}
}

ToolbarManager.prototype.activate = function(ID) {
	button = this.controls[ID];
	button.activate();

	//change button state
	$('#'+ID).addClass('active');

	if (ID == 'drawTool') {
		$('.zoneBtns').slideDown();
	}
}

ToolbarManager.prototype.deactivate = function(ID) {
	button = this.controls[ID];
	button.deactivate();

	//change button state
	$('#'+ID).removeClass('active');

	if (ID == 'drawTool') {
		$('.zoneBtns').slideUp();
	}
}



/*--- Zone Manager ---*/
function ZoneManager() {
	this.setup();
	this.currentMode = 'IC'
}

//return current zone
ZoneManager.prototype.mode = function() {
	return this.currentMode;
}

ZoneManager.prototype.setMode = function(mode) {
	this.currentMode = mode;
}

//setup draw
ZoneManager.prototype.draw = function () {
	$('.zoneBtns').slideDown();
}

ZoneManager.prototype.endDraw = function() {
	$('.zoneBtns').slideUp();
}

ZoneManager.prototype.setup = function() {
	//setup buttons
	z = this;
	$('.zoneBtn').click(function(){
		z.setMode($(this).attr('ID').split('zone')[0]);
	});
}

ZoneManager.prototype.setZone = function() {

}


