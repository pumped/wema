function Strategies(url) {
  this.url = url;
  this.state = {
    "prevention":20,
    "protection":1
  };
  this.callbacks = {};

  this.setup();
}

Strategies.prototype.setup = function() {
  var that = this;

  $("#managementStrategiesPanel .layers li").on("click",function(e) {
    e.stopPropagation();
  });

  $("#managementStrategiesPanel").on("click",function(e) {
    e.stopPropagation();
  });

  $("#managementStrategiesPanel .layers .btn").on("click",function(e) {
    e.stopPropagation();
    $(this).click()
  });

  $("#preventionCampaignButtons button").on("click",function(e) {
    $(this).parent(".btn-group").children("button").removeClass("active");
    $(this).addClass("active");
    that.state.prevention = parseInt($(this).data("action"));
    that.saveState();
  });

  $("#assetProtectionButtons button").on("click",function(e) {
    $(this).parent(".btn-group").children("button").removeClass("active");
    $(this).addClass("active");
    that.state.protection = parseInt($(this).data("action"));
    that.saveState();
  });
}

Strategies.prototype.saveState = function() {
  console.log(this.state);
  this._event("stateChanged",this.state);
}

Strategies.prototype.getState = function() {
  return this.state;
}

//fire callbacks
Strategies.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
};

//set callback
Strategies.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
};
