var zones;
var iface = new InterfaceManager();

$('document').ready(function(){

	setupTimeline();
	zones = new ZoneManager();
	iface.setup();

	//set current mode
	if ( window.location.hash ) {
    	$(window.location.hash).click();
	}
});

function InterfaceManager() {
	this.tools = new ToolbarManager();
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

	//setup buttons
	$('.navbar-nav li').removeClass('active');
	$('#'+mode).parent().addClass('active');

	console.log('changed mode')
}

function setupTimeline() {
	$('.slider').slider({
		min:2000,
		max:2050,
		step:1,
		value: 2013,
		orientation: 'horizontal'
	});
}

function log(m) {
	console.log(m);
	d = new Date().toLocaleTimeString();
	$('.console').prepend('<i>'+d+'</i>: '+m+'<br/>');
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
	if (mode == 'plan') {
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



