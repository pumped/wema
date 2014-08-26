function ModelManager() {
	this.url = 'proxy.php?url=http://137.219.45.153:5566';
	this.ID = -1;
	this.updateRate = 1000;
}

ModelManager.prototype.setup = function() {

}

ModelManager.prototype.getStatus = function() {

}

ModelManager.prototype.setID = function(id) {
	this.ID = id;
	mc.addHSLayer(id);
	mc.addTimeline(id, years[0], years[1]);	
}

ModelManager.prototype.setMapController = function(mapController) {
	this.mapController = mapController;
}

ModelManager.prototype.loadTimeline = function(callback) {
	var url = this.url + "/parentList";
	$.getJSON(url,function(data){
		callback(data);
	});
}

//expects jquery element
ModelManager.prototype.setConsole = function(cons) {
	this.console = cons;
	this.console .write("test")
	var that = this;
	setTimeout(function(){that.updateConsole()},0);
}

ModelManager.prototype.updateConsole = function() {
	self = this;
	var url = this.url + '/status'
	$.getJSON(url, function(data){
		newID = self.ID;
		for (var i = data.logs.length-1; i >= 0; i--) {
			if (self.ID < data.logs[i].ID) {
				newID = Math.max(newID,data.logs[i].ID);
				message = data.logs[i].message;
				level = data.logs[i].logLevel;
				self.console.write(message,level);
			}
		}
		self.ID = newID;
		var that = self;
		setTimeout(function(){that.updateConsole();},self.updateRate);
	});
}