

function GraphTimeline(container) {
  this.container = container;

  this.options = {
    heights: [50,300]
  }

  this.setupGraph(this.container);

  this.tlExpanded = false;
  this.tlExpandHandle = false;
}

GraphTimeline.prototype._setupExpander = function(id) {
	var that = this;
  this.tlExpandHandle = id;
	$(id).on("click",function expanderClicked(){
		if (that.tlExpanded == false) {
      that.expandGraph();
    } else {
      that.shrinkGraph();
    }
	});
}

GraphTimeline.prototype.setupGraph = function(div) {
  Highcharts.setOptions({
    colors: ['#cccccc', '#529BF1', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
  });

  this.chart = new Highcharts.Chart({
    chart: {
      renderTo:this.container,
      type: 'area',
      spacingBottom: 5,
      spacingTop: 5,
      spacingLeft: 0,
      spacingRight: 0
    },
    title: {
      text: ''
    },
    legend: {
      enabled:false
    },
    xAxis: {
      minTickInterval: 1,
      labels:{
        enabled:false
      }
    },
    yAxis: {
      title: {
        text: ''
      },
      labels: {
        enabled:true,
        formatter: function() {
          return this.value;
        }
      }
    },
    tooltip: {
      formatter: function () {
        return '<b>Expected Distribution: </b><br/>' +
          "Year: " + this.x + '</b><br/>' +
          "<b>Area:</b> " + this.y + ' ha';
      },
      useHTML: true,
      backgroundColor: "#fff",
      shadow:false,
      crosshairs: true
    },
    plotOptions: {
      area: {
        fillOpacity: 0.5
      }
    },
    credits: {
      enabled: false
    },
    series: [{
        name: 'Original',
        color: "#cccccc",
        data: [null]
      }, {
        name: 'New',
        color: '#24CBE5',
        data: [null]
    }]
  });
};

GraphTimeline.prototype.expandGraph = function() {
  $('#'+this.container).height(this.options.heights[1]);
  this.chart.reflow();
  this.tlExpanded = true;
  if (this.tlExpandHandle) {
    $(this.tlExpandHandle + " .glyphicon").removeClass("glyphicon-chevron-up");
    $(this.tlExpandHandle + " .glyphicon").addClass("glyphicon-chevron-down");
  }
};

GraphTimeline.prototype.shrinkGraph = function() {
  $('#'+this.container).height(this.options.heights[0]);
  this.chart.reflow();
  this.tlExpanded = false;
  if (this.tlExpandHandle) {
    $(this.tlExpandHandle + " .glyphicon").removeClass("glyphicon-chevron-down");
    $(this.tlExpandHandle + " .glyphicon").addClass("glyphicon-chevron-up");
  }
};



GraphTimeline.prototype.setData = function(data) {
  console.log(data);
  this.data = data;
  if (this.ID && this.baseID) {
    this._updateData("base");
  }
};

GraphTimeline.prototype.setBaseID = function(id) {
  this.baseID = id;
  this._updateData("base");
}

GraphTimeline.prototype.setID = function(id) {
  this.ID = id;
  this._updateData("selected");
}

GraphTimeline.prototype.setDataArray = function(id,data) {
  var timeline = this.fetchTimeline(id);
  timeline.occupied = data;

  this._partialUpdate(id);
}

GraphTimeline.prototype.setTimelineData = function(id,data) {
  if (data.hasOwnProperty("children")) {
    delete data.children
  }

  //get node
  var node = this.fetchTimeline(id)

  if (node) {
    for (key in data) {
      if (key != "ID"){
        node[key] = data[key];
      }
    }
  } else {
    console.warn("Create new timeline");
    console.log(data);
    console.log(this.data[0])
    this.data[0].children.push(data);
  }

  this._partialUpdate(id);
}

GraphTimeline.prototype.addPoint = function (id,idx,val) {
  var timeline = this.fetchTimeline(id);

  if (timeline.hasOwnProperty("occupied")) {

    var stats = timeline.occupied;

    //check array length
    if (stats.length > idx) { //exits
      stats[idx] = val;
    } else if (stats.length == idx) { //next
      stats.push(val);
    } else { //not enough
      for (var i=0; i<idx; i++) {
        stats.push(null);
      }
      stats.push(val);
    }

    this._partialUpdate(id);

  }
};

GraphTimeline.prototype._partialUpdate = function (id) {
  if (this.ID == id) {
    this._updateData("selected");
  } else if (this.baseID == id) {
    this._updateData("base");
  }
}

GraphTimeline.prototype._updateData = function(type) {
  if (type == "base") {
    var data = this.fetchTimeline(this.baseID);
    this.chart.series[0].setData(data.occupied);
  } else if (type == "selected") {
    var data = this.fetchTimeline(this.ID);
    this.chart.series[1].setData(data.occupied);
  }
}





GraphTimeline.prototype.fetchTimeline = function(id) {
  if (this.data) {
    return this._recursiveSearchData(id, this.data[0]);
  }
  return false;
}

GraphTimeline.prototype._recursiveSearchData = function(id, elem) {
	if (elem.ID == id) {
		return elem;
	}

	//for children in elem
	for (i in elem.children) {
		//children search
		var child = this._recursiveSearchData(id,elem.children[i]);
		if (child) {
			return child;
		}
	}

	return false;
}
