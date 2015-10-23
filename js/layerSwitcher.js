function LayerSwitcher() {
  this.setup();
  this.callbacks = {};
}

LayerSwitcher.prototype.setup = function () {
  var that = this;

  //setup click
  $('#layerSwitcher .layers li').on("click",function layerSelected(e){
    e.stopPropagation();
    var id = $(this).attr('id');
    if (id) {
      console.log(id);
      that._fireEvent("layer",{"id":id});
      $("#layerSwitcher .layers img").removeClass("active");
      $(this).children('img').addClass("active");
    } else {
      console.warn("Layer ID paramater not set");
    }
  });

  $('#layerSwitcher .layerTransparency .opacity, #layerSwitcher').on('click',function(e) {
    e.stopPropagation();
  });

  $('#layerSwitcher .layerTransparency .opacity').on('input change',function(e) {
    e.stopPropagation();

    var id = $(this).attr("id");
    if (id) {
      var params = {
        "id":id,
        "value":this.value
      }
      that._fireEvent("transparency",params);
    } else {
      console.warn("Layer ID paramater not set");
    }
  });

};

LayerSwitcher.prototype._fireEvent = function type(type,params) {
  if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](params);
			}
		}
	}
}

LayerSwitcher.prototype.onLayerToggle = function(callback) {
  var type = "layer";
  if (!this.callbacks.hasOwnProperty(type)) {
  		this.callbacks[type] = [];
  	}
  	this.callbacks[type].push(callback);
}

LayerSwitcher.prototype.onTransperancyChange = function(callback) {
  var type = "transparency";
  if (!this.callbacks.hasOwnProperty(type)) {
  		this.callbacks[type] = [];
  	}
  	this.callbacks[type].push(callback);
}
