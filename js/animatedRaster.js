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

	this.setup();

	this.frameCallbacks = [];
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
}

AnimatedRaster.prototype.drawImage = function(time) {
	this.time = time;

	var img = new Image();
	img.src = this.url+time+'.png?'+this.cacheBreaker;

	var that = this;
	img.onload = function() {
		that.ctx.clearRect(0, 0, that.canvas.width, that.canvas.height);
		that.ctx.drawImage(img, that.imgPosition.x, that.imgPosition.y, that.imgSize.x, that.imgSize.y);
		//500 * img.height / img.width
		//floodLayer.changed();
		//console.log('drawing: '+iCount)
		that.fireFrameCallback();
	};
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

	this.frameSteps = 0.1;
}

Animater.prototype.start = function() {
	if (this.animating){
		return;
	}
	this.animating = true;
	//console.log("animation started");

	//play animation
	var that = this;
	that._animate();
}

Animater.prototype.stop = function() {
	//console.log("animation stoped");
	this.animating = false;
}

Animater.prototype.animateTo = function(value) {
	console.debug("Animate To: " + value)

	this.targetFrame = value;
	this.frameStep = this._calculateStepSize(this.currentFrame, value);

	if (!this.animating) {
		console.debug("animation starting");
		this.start();
	}
}

Animater.prototype._calculateStepSize = function(currentSize, targetSize) {
	//calculate step size
	var stepSize = Math.ceil((targetSize - currentSize)/5);
	var backwards = false;

	if (currentSize > targetSize) {
		backwards = true;
		//stepSize = -stepSize;
		//console.log("backwards");
	} else {
		//stepSize = stepSize;
		backwards = false;
		//console.log("forwards");
	}

	/*console.log(backwards);
	console.log(currentSize);
	console.log(targetSize);*/

	return {"stepSize":stepSize,"backwards":backwards};
}

Animater.prototype._calculateNewFrame = function() {
	//calculate new value
	var newFrame = this.currentFrame + this.frameStep.stepSize;

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

	/*console.log("Target: " + this.targetFrame);
	console.log("Current: " + newFrame);*/

	return newFrame;
}

Animater.prototype._animate = function() {

	if (!this.animating) {
		console.log("animating finished");
		return;
	}

	this.currentFrame = this._calculateNewFrame();


	//draw frame
	this.layer.drawImage(this.currentFrame.toFixed(0));


	//TODO - real logic
	/*if (this.backwards==0) {
		this.count+=0.1;
	} else {
		this.count-=0.1;
	}

	if (this.count >= 23.5) {
		this.backwards = 1;
	} else if (this.count <= 0) {
		this.backwards = 0;
	}*/

	if (this.animating) {
		var that = this;
		setTimeout(function(){that._animate()},this.frameTime);
	}
};
