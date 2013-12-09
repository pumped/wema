$('document').ready(function(){
	$('.navbar-nav a').click(function(){
		button = this.href.split('#')[1];
		setMode(button);
	});

	if ( window.location.hash ) {
    	$(window.location.hash).click();
	}

});

function setMode(mode) {
	//setup buttons
	$('.navbar-nav li').removeClass('active');
	$('#'+mode).parent().addClass('active');

	//set ui
	if (mode == 'edit') {

	} else if (mode == 'zone') {

	} else if (mode == 'plan') {

	}
}