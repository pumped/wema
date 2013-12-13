var zones;
var iface;

$('document').ready(function(){

	setupTimeline();
	zones = new ZoneManager();
	iface = new InterfaceManager(zones);

	//set current mode
	if ( window.location.hash ) {
    	$(window.location.hash).click();
	}
});

function InterfaceManager() {
	this.setup();
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