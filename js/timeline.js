function Timeline (data) {
	this.data = data;

	this.c = {
		currentRow:0
	};

	this.config = {
		startDate: 2014,
		elementHeight: 50,
		elementWidth: 50,
		lineWidth: 1,
		rowSpacing: 10,
		stepWidth:40,
		pointSize:8,
		points: {
			max: 34,
			min:8
		},
		topBorder: 30,
		leftBorder:0,

		grid: {
			lineWidth:0.5,
			lineColor: "#ccc",
			major: {
				color: "#aaa",
				width: 1
			},
			majorLineInterval: 5,

			yearNumbers: {
				font: {
					family:   'Helvetica',
					size:     12,
					anchor:   'middle',
					leading:  '1.5em'
				},
				color: "#666"
			}
		},
	};
}

function encode_as_img_and_link(){
	 var svg = $("#timeline").html();
	 var b64 = Base64.encode(svg); // or use btoa if supported

	 // Works in Firefox 3.6 and Webit and possibly any browser which supports the data-uri
	 $("body").append($("<a href-lang='image/svg+xml' href='data:image/svg+xml;base64,\n"+b64+"' title='file.svg'>Download</a>"));
}

Timeline.prototype.drawTimeline = function(element) {
	this.range = [this.data[0].startTime,this._latestTime(this.data)];
	this.rows = this._rowCount(this.data);
	this.steps = 35;
	this.height = (this.rows * (this.config.elementHeight + this.config.rowSpacing*2)) + this.config.topBorder + 100;
	this.width = ((this.range[1]-this.range[0]+1)*(this.config.stepWidth))+this.config.leftBorder;
	this.draw = SVG(element).size(this.width,this.height);


	this.chart = this.draw.group();
	this.chart.attr('id','chart');
	this.plotGroup = this.chart.group();
	this.plotGroup.attr('id','plot');
	this.mm = this.minMaxValue(this.data[0]);
	console.log("Min: "+this.mm[0]+" Max: "+this.mm[1]);
	
	this.drawBase();
	this.processTimeline(this.data);
};

Timeline.prototype._latestTime = function(data) {
	var largest = 0;
	for (var i in data) {
		if (data[i].children.length) {
			var c = this._latestTime(data[i].children);
			if (c>largest) {
				largest = c;
			}
		}
		if (data[i].endTime > largest) {
			largest = data[i].endTime;
		}
	}
	return largest;
};

Timeline.prototype.minMaxValue = function(data) {
	
	//for array
	arr = data.invStats;
	var min = Math.min.apply(null, arr);
    var max = Math.max.apply(null, arr);
    var mm = [min,max];

	//for each child call the function, base case is to ignore this
	for (var i=0; i<data.children.length; i++) {
		//compare
		mmChild = this.minMaxValue(data.children[i]);
		if (mm[0] > mmChild[0]) {mm[0] = mmChild[0]}; //min
		if (mm[1] < mmChild[1]) {mm[1] = mmChild[1]}; //max
	}
	
	return mm;
}

Timeline.prototype._rowCount = function(data) {
	var count = 0;
	for (var i in data) {
		count++;
		if (data[i].children.length) {
			count += this._rowCount(data[i].children);
		}
	}
	return count;
}

Timeline.prototype.drawBase = function() {
	var underlay = this.plotGroup.group();
	underlay.attr('id','underlay');
	this.plotGroup.move(0,this.config.topBorder);

	//add header
	this.topAxisGroup = this.chart.group();
	this.topAxisGroup.attr('id','topAxis');

	
	var y = 30;
	var y2 = this.height;
	var xSkip = 0.5*this.config.elementWidth;

	for (i=0; i<=this.steps; i++) {
		var x = xSkip + (i*this.config.stepWidth) + this.config.leftBorder;
		
		//draw columns
		/*var column = underlay.rect(this.config.stepWidth,y2-y)
			column.move(x - (0.5*this.config.stepWidth),y);
			column.fill('#fff');
			column.attr('class','rowHover');
		*/

		//draw year lines
		var line = underlay.line(x,y,x,y2);
		line.stroke({width:this.config.grid.lineWidth,color:this.config.grid.lineColor});
		//highlight major intervals
		if (i%this.config.grid.majorLineInterval == 0) {
			line.stroke(this.config.grid.major);
		}

		//draw year numbers
		var year = this.config.startDate + i;
		var text = this.topAxisGroup.text(year.toString())
		text.font(this.config.grid.yearNumbers.font);
		text.fill(this.config.grid.yearNumbers.color);
		text.move(x,y);
		text.rotate(90);		
	}

	


	//draw shading
}

Timeline.prototype.clickBind = function(callback) {
	this.callback = callback;
	var that = this;
	$('.clickTarget').click(function() {
		that.selectLineage(this);
		return false;
	});
}

Timeline.prototype.selectLineage = function(target) {
	dateID = $(target).attr('href').replace("#tl",'').split('-');
	date = dateID[0];
	id = dateID [1];
	console.log(id);
	this.callback(id, date);
}

Timeline.prototype.processTimeline  = function(tData,parent) {
	//sort	

	//draw
	for (i in tData) {
		var t = tData[i];

		if (parent) {
			var group = parent.group.group();
		} else {
			var group = this.plotGroup.group();
		}
		t.group = group;
		group.attr('id','group'+t.ID);
		
		//workout element coordinates
		this.c.currentRow++;
		var x = (t.startTime * this.config.stepWidth) + this.config.leftBorder;
		var y = ((this.config.elementHeight + this.config.rowSpacing) * this.c.currentRow);
		t.x = x;
		t.y = y;

		//draw time lines	
		var tX = x + (0.5*this.config.elementWidth);
		var tX2 = tX + ((t.endTime - t.startTime) * this.config.stepWidth)
		var tY = y + (0.5*this.config.elementHeight);
		var timeLine = group.line(tX,tY,tX2,tY).stroke({width:this.config.lineWidth});

		//draw connecting lines
		if (parent) {
			var thisX = x + (0.5*this.config.elementWidth);
			var thisY = y + (0.5*this.config.elementHeight);
			var parentX = thisX;
			var parentY = parent.y + (0.5*this.config.elementHeight);
			var dropLine = group.line(parentX,parentY,thisX,thisY).stroke({width:this.config.lineWidth});
		}

		//draw children
		if (t.children.length) {
			this.processTimeline(t.children,t);
		}
		
		//draw element last to be on top
		var rect = group.rect(this.config.elementWidth, this.config.elementHeight).move(x,y);

		//draw points on timeline last to be above lines
		for(i=0;i <= (t.endTime - t.startTime); i++) {
			//draw link target
			var link = group.link('#tl'+this.getDate(t,i)+'-'+t.ID);
			link.attr('class','clickTarget');
			link.attr('title', this.getDate(t,i));
			var target = link.rect(this.config.stepWidth,this.config.elementHeight);
			var tarX = x + (i*this.config.stepWidth) + (0.5*this.config.elementWidth)-(0.5*this.config.stepWidth);
			var tarY = tY - (0.5*this.config.elementHeight);
			target.move(tarX,tarY);
			target.fill('#eee');
			//target.attr('class','clickTarget');			

			if (i !=0 ) {
				//var pointSize = this.config.points.min + ((i*rate/30) * (this.config.points.max - this.config.points.min));
				var pointSize = this.config.points.min + (((t.invStats[i]-this.mm[0]) / (this.mm[1]-this.mm[0])) * (this.config.points.max - this.config.points.min));
				var circle = link.circle(pointSize);
				var cx = x+(0.5*this.config.elementWidth)+(i*this.config.stepWidth)-(0.5*pointSize);
				var cy = tY-(0.5*pointSize);
				circle.move(cx,cy);
				circle.fill('#fff');
				circle.stroke({color: '#000', width: this.config.lineWidth});

				if ((i+parseInt(t.startTime))%this.config.grid.majorLineInterval != 0) {
					circle.attr('class','minorPoint');
				} else {
					circle.attr('class','majorPoint');
				}
			}			
		}
	}
};

Timeline.prototype.getDate = function(data, i) {
	return this.config.startDate + i + parseInt(data.startTime);
}


