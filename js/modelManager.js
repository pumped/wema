function ModelManager() {
	this.url = 'http://'+document.location.hostname+':8082/api';
	this.id = -1;
	this.updateRate = 5000;
	this.consID = -1;
	this.params = {};

	//console.trace();
}

ModelManager.prototype.setup = function() {

}

ModelManager.prototype.getStatus = function() {

}

ModelManager.prototype.setParamaters = function(param) {
	this.params = param;
}

//save the state and run a model
ModelManager.prototype.saveState = function(species, timeline, noAction) {
/*	var species = "a";
	var timeline = "b";*/
	var fullStr;
	var reqString;
	if (noAction == false) {
		fullStr = "&full=1";
		reqString = "&prevention=0&protection=0";
	} else {
		fullStr = "&full=1";
		reqString = this.reqString();
	}

	$('#runModel i').addClass('fa-pulse');

	$.getJSON(this.url + '?r=runModel&species='+species+"&timeline="+timeline+reqString+fullStr, function(data) {
		console.log(data);
	});
}

ModelManager.prototype.reqString = function() {
	var str = "";
	for (i in this.params) {
		str+= "&" + i + "=" + this.params[i];
	}

	return str;
}

ModelManager.prototype.setID = function(id) {
	/*this.id = id;
	mc.addHSLayer(id);
	mc.addTimeline(id, years[0], years[1]);	*/
}

ModelManager.prototype.setMapController = function(mapController) {
	this.mapController = mapController;
}

ModelManager.prototype.onNewData = function(callback) {

}

//expects jquery element
ModelManager.prototype.setConsole = function(cons) {
	this.console = cons;
	this.console.write("test")
	var that = this;
	setTimeout(function(){that.updateConsole()},0);
}

ModelManager.prototype.updateConsole = function() {
	self = this;
	var url = this.url + '/status'
	$.getJSON(url, function(data){
		newID = self.ID;
		for (var i = data.logs.length-1; i >= 0; i--) {
			if (self.consID < data.logs[i].ID) {
				newID = Math.max(newID,data.logs[i].ID);
				message = data.logs[i].message;
				level = data.logs[i].logLevel;
				self.console.write(message,level);
			}
		}
		self.consID = newID;
		var that = self;
		setTimeout(function(){that.updateConsole();},self.updateRate);
	});
}
