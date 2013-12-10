$('document').ready(function(){
	$('.navbar-nav a').click(function(){
		button = this.href.split('#')[1];
		setMode(button);
	});

	if ( window.location.hash ) {
    	$(window.location.hash).click();
	}

	setupTimeline();

});

function setMode(mode) {
	//setup buttons
	$('.navbar-nav li').removeClass('active');
	$('#'+mode).parent().addClass('active');

	console.log('changed mode')

	//set ui
	if (mode == 'edit') {
		mc.editMode();
	} else if (mode == 'zone') {
		mc.zoneMode();
	} else if (mode == 'plan') {
		mc.planMode();
	} else if (mode == 'overview') {
		mc.overviewMode();
	}
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