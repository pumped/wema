function AnimatedRaster (params) {
	this.cacheBreaker = 0;

	if (params.hasOwnProperty("extent")) {
		this.extent = params.extent;
	}

	if (params.hasOwnProperty("url")) {
		this.url = params.url;
	}

	if (params.hasOwnProperty("startTime")) {
		this.time = params.startTime;
	}
	this.currentVisibleFrame = 0;
	this.backwards = false;

	this.setup();

	this.frameCallbacks = [];

	this.waitingFrames = [];
}

AnimatedRaster.prototype.setup = function() {
	//create canvas
	this.canvas = document.createElement('canvas');
	this.canvas.setAttribute('ID','mapCanvas')
	this.ctx = this.canvas.getContext("2d");

	this.imgSize = {x:500,y:700};
	this.imgPosition = {x:0,y:0};
};

AnimatedRaster.prototype.setTime = function(time) {
	//todo animate to that time
	console.log("Time set to: " + time);
	this.time = time;
	this.drawImage(time);
}

AnimatedRaster.prototype.changeParam = function(paramater, value) {
	if (paramater == "url") {
		this.url = value;
		this.cacheBreaker++;
	}

	console.debug("Paramater " + paramater + " changed to " + value);

	//refresh view
	this.drawImage(this.time);
};

AnimatedRaster.prototype.drawImage = function(time) {
	if (!this.canvasSize) {
		return;
	}

	this.time = time;
	var extent = this.extent.join(",");

	var img = new Image();
	img.src = this.url+"&time="+time+
	"&BBOX="+extent+
	"&WIDTH="+this.canvasSize[0]+
	"&HEIGHT="+this.canvasSize[1]+
	'&CB='+this.cacheBreaker;

	var that = this;
	var thisTime = parseInt(time);
	this.waitingFrames.push(img);

	img.onload = function() {
		var draw = false;
		var frame = that.waitingFrames.indexOf(img);
		that.waitingFrames.splice(0,frame+1);
		//if not loaded out of order, draw it
		if (frame >= 0) {
			that.currentVisibleFrame = thisTime;
			that.ctx.clearRect(0, 0, that.canvas.width, that.canvas.height);
			that.ctx.drawImage(img, that.imgPosition.x, that.imgPosition.y, that.imgSize.x, that.imgSize.y);
			that.fireFrameCallback();
		}
	};
};

AnimatedRaster.prototype.setDirection = function (backwards) {
	this.backwards = backwards;
};

AnimatedRaster.prototype.onframe = function(callback) {
	this.frameCallbacks.push(callback);
};

AnimatedRaster.prototype.fireFrameCallback = function(callback) {
	for (i in this.frameCallbacks) {
		if (this.frameCallbacks[i] && typeof(this.frameCallbacks[i]) === "function") {
	    	this.frameCallbacks[i](this.time);
		}
	}
};

AnimatedRaster.prototype.getCanvas = function(extent, resolution, pixelRatio, size, projection) {
	//calculate projections
	this.calculateProjection(extent, resolution, pixelRatio, size, projection);

	//redraw
	this.drawImage(this.time);

	return this.canvas;
};

AnimatedRaster.prototype.calculateProjection = function(extent, resolution, pixelRatio, size, projection) {
	this.extent = extent;
	this.canvasSize = size;

	this.canvas.setAttribute('width', size[0]);
	this.canvas.setAttribute('height', size[1]);

	//canvasSize
	var cnv = {width:size[0], height:size[1]};

	var bounds = extent;
	var imgExtent = this.extent;

	//console.log(extent)
	//console.log(imgExtent)

	var cnvCoord = {width: bounds[2] - bounds[0], height: bounds[3] - bounds[1]};
	var imgCoord = {width: imgExtent[2] - imgExtent[0], height: imgExtent[3] - imgExtent[1]};

	//console.log(imgCoord);

	//calculate pixel and coordinate difference
	var x = cnvCoord.width / cnv.width;
	var y = cnvCoord.height / cnv.height;
	//var imX = imgCoord.width / cnv.width;
	//console.log("imx: " + imX);
	//console.log("X:" + x + ", Y:" + y );

	//calculate image position
	this.imgPosition.x = (imgExtent[0] - extent[0])/x;
	this.imgPosition.y = -((imgExtent[3] - extent[3])/y);

	//calculate image size
	this.imgSize.x = (imgCoord.width / x);
	this.imgSize.y = (imgCoord.height / y);

	//console.log("sizeX: " + imgSize.x + ", sizeY: " + imgSize.y);
	//console.log("imgX:" + imgPosition.x + ", imgY:" +imgPosition.y);
};

//fire callbacks
AnimatedRaster.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
};

//set callback
AnimatedRaster.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
};



function Animater(layer) {
	//layer we are animating
	this.layer = layer;

	//frame counter
	this.count = 0;
	//playback direction and speed
	this.frameStep = {"stepSize":0.1,"backwards":0};
	//target frame
	this.targetFrame = 4;

	//animating
	this.animating = false;

	//maximum time to complete animation
	this.maxDuration = 2000;

	//frame time
	this.frameTime = 100;

	this.currentFrame = 0;

	this.frameSteps = 1;
}

Animater.prototype.start = function() {
	if (this.animating){
		return;
	}
	this.animating = true;

	//play animation
	var that = this;
	that._animate();
}

Animater.prototype.stop = function() {
	this.animating = false;
}

Animater.prototype.jumpTo = function(value) {
	this.stop();
	this.frameStep = this._calculateStepSize(this.currentFrame, value);
	this.targetFrame = value;

	//draw frame
	this._setFrame(this.targetFrame.toFixed(0));
}

Animater.prototype.animateTo = function(value) {
	this.targetFrame = value;
	this.frameStep = this._calculateStepSize(this.currentFrame, value);

	if (!this.animating) {
		this.start();
	}
}

Animater.prototype._calculateStepSize = function(currentSize, targetSize) {
	//calculate step size
	var stepSize = Math.ceil((targetSize - currentSize)/5);
	var backwards = false;

	if (currentSize > targetSize) {
		backwards = true;
		if (stepSize > -1 ) {
			stepSize == -1;
		}
	} else {
		backwards = false;
	}

	return {"stepSize":stepSize,"backwards":backwards};
}

Animater.prototype._calculateNewFrame = function() {
	//calculate new value
	var newFrame;

	if (this.frameStep.stepSize > 0 || this.frameStep.stepSize < 0) { //frame step size is valid
		newFrame = this.currentFrame + this.frameStep.stepSize;

		if (this.frameStep.backwards) {
			if (newFrame < this.targetFrame) {
				newFrame = this.targetFrame;
				this.stop();
			}
		} else {
			if (newFrame > this.targetFrame) {
				newFrame = this.targetFrame;
				this.stop();
			}
		}
	} else { //frame step size is invalid
		newFrame = this.targetFrame;
		this.stop();
	}

	return newFrame;
}

Animater.prototype._animate = function() {

	if (!this.animating) {
		return;
	}

	var newFrame = this._calculateNewFrame();

	if (this.currentFrame != newFrame) {
		this.currentFrame = newFrame;
		this._setFrame(this.currentFrame.toFixed(0));
	}

	if (this.animating) {
		var that = this;
		setTimeout(function(){that._animate()},this.frameTime);
	}
};

Animater.prototype._setFrame = function(frame) {
	//draw frame
	this.layer.setDirection(this.frameStep.backwards);
	this.layer.drawImage(frame);
}
