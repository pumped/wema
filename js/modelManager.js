function ModelManager() {
	this.url = 'proxy.php?url=http://192.168.1.2:5566';
	this.ID = -1;
	this.updateRate = 100;
}

ModelManager.prototype.setup = function() {

}

ModelManager.prototype.getStatus = function() {

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
	console.log(cons)
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