DEBUG = 10;
INFO = 20;
WARNING = 30;
ERROR = 40;
CRITICAL = 50;

function Console() {
	this.elem = '.console';
}

Console.prototype.write = function(m, logLevel) {
	var levels = {10:"debug",20:"info",30:"warning",40:"error",50:"critical"};
	logLevel = typeof logLevel !== 'undefined' ? levels[logLevel] : levels[20];

	console.log(m);
	var d = new Date().toLocaleTimeString();
	$('.console').prepend('<div class="consoleMessage cons'+logLevel+'"><span class="consoleDate">'+d+'</span>: '+m+'</div>');
}

log = new Console();