function TimelineOverview(container) {
  this.container = container;
  this.callbacks = {};

  this.charts = {}
  this.chartN = 0;

  this.baseID;
  this.baseData;
  this.lastTimeline = "1";

  var that = this;
  $("#timelines").on("click",".viewTlButton",function(e){
    var id = $(this).data("id");
    that._idChange(id);
  });

  $("#switchTimeline").on("click",function(e){
    console.log(that.baseID);
    if (that.ID != that.baseID) {
      that.lastTimeline = that.ID;
      that._idChange(that.baseID);
    } else {
      that._idChange(that.lastTimeline);
    }
  });

  this.costLookup = {
    "delimitation":{"id":"d_range","cost":300,"costID":"d_cost","costSumID":"d_costSum","haSum":"d_haSum"},
    "prevention":{"id":"p_range","cost":0,"costID":"p_cost","costSumID":"p_costSum","haSum":"p_haSum"},
    "removal":{"id":"r_range","cost":1800,"costID":"r_cost","costSumID":"r_costSum","haSum":"r_haSum"},
    "containment":{"id":"c_range","cost":1200,"costID":"c_cost","costSumID":"c_costSum","haSum":"c_haSum"},
    "intensiveControl":{"id":"ic_range","cost":1200,"costID":"ic_cost","costSumID":"ic_costSum","haSum":"ic_haSum"},
    "assetProtection":{"id":"ap_range","cost":600,"costID":"ap_cost","costSumID":"ap_costSum","haSum":"ap_haSum"}
  };
  //this.chart = this.newGraph({chart: {renderTo: "timeline0-chart"}});
}

TimelineOverview.prototype._idChange = function(id) {
  this._event("timelineChanged",id);
};

TimelineOverview.prototype.setupChart = function(container,chartID,id) {
  //setup dom
  var html = '<div id="timeline'+id+'" class="col-md-4 tlCard">\
    <div class="tlButtonContainer">\
      <div class="row">\
        <div class="col-md-12"><h2>Timeline '+id+'</h2></div>\
        <div class="col-md-12">\
          <div class="row">\
            <div class="col-md-6 tlStats">\
              <div class="cost"><span class="value">$</span><div class="title">Management Cost</div></div>\
            </div>\
            <div class="col-md-6 tlStats">\
              <div class="distribution"><span class="value"></span><span class="unit">ha</span><div class="title">30yr Distribution</div></div>\
            </div>\
          </div>\
        </div>\
        <div class="col-md-12">\
          <div class="tlDistStats">\
              <div class="tlDistHa tlDZone"><span class="value">ha</span><div class="title">Delimitation</div></div>\
              <div class="tlDistHa tlPZone"><span class="value">%</span><div class="title">Prevention</div></div>\
              <div class="tlDistHa tlRZone"><span class="value">ha</span><div class="title">Eradication</div></div>\
              <div class="tlDistHa tlCZone"><span class="value">ha</span><div class="title">Containment</div></div>\
              <div class="tlDistHa tlICZone"><span class="value">ha</span><div class="title">Intensive Control</div></div>\
              <div class="tlDistHa tlAPZone"><span class="value">ha</span><div class="title">Asset Protection</div></div>\
          </div>\
        </div>\
        <div class="col-md-12">\
          <div id="'+chartID+'" class="timelineChart"></div>\
        </div>\
        <div class="col-md-12">\
          <button class="viewTlButton btn">View / Edit</button>\
        </div>\
      </div>\
    </div>\
  </div>'
  $("#"+container).append(html);

  //create chart
  var dataID = id;
  this.charts[dataID] = this.newGraph({chart: {renderTo: chartID}});

  return this.charts[dataID];
};

TimelineOverview.prototype.updateChart = function(data,id) {
  var dha=0,pha=0,rha=0,cha=0,icha=0,apha=0;
  var mgmtCost=0,mgmtHa=0;


  if (data.hasOwnProperty("d_haSum")) {
    var len = data.d_haSum.length-1;
    dha = data.d_haSum[len];
    pha = data.prevention[0];
    rha = data.r_haSum[len];
    cha = data.c_haSum[len];
    icha = data.ic_haSum[len];
    apha = data.ap_haSum[len];

    mgmtCost = numberWithCommas(this.getCostsAt(data.ID,len,true));
    occupied = numberWithCommas(data.occupied[len]);
  }

  $("#timeline"+id+" .cost .value").html("$" + mgmtCost);
  $("#timeline"+id+" .distibution .value").html(occupied + "ha");

  $("#timeline"+id+" .tlDZone .value").html(dha + "ha");
  $("#timeline"+id+" .tlPZone .value").html(pha + "%");
  $("#timeline"+id+" .tlRZone .value").html(rha + "ha");
  $("#timeline"+id+" .tlCZone .value").html(cha + "ha");
  $("#timeline"+id+" .tlICZone .value").html(icha + "ha");
  $("#timeline"+id+" .tlAPZone .value").html(apha + "ha");

  //set button id
  $("#timeline"+id+" .viewTlButton").data("id",id);

}

TimelineOverview.prototype.getCostsAt = function(id,year,summarised) {
  //console.log(this.costs);
  //check objects exist
  var data = this.fetchTimeline(id);
  if (data) {
    //if summarised pull from summaries
    var costs;

    //summarise
    var summed = 0;
    for (id in this.costLookup) {
      //set the array ID depending on if it's total cost or not
      var sumID = this.costLookup[id].costID;
      if (summarised) {
        sumID = this.costLookup[id].costSumID;
      }

      //add up costs
      summed += parseInt(data[sumID][year]);
    }

    return summed;
  }
  return 0;
}

TimelineOverview.prototype.newGraph = function(options) {
  Highcharts.setOptions({
    colors: ['#cccccc', '#529BF1', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
  });

  var defaultOptions = ({
    chart: {
      renderTo:this.container,
      type: 'area',
      spacingBottom: 5,
      spacingTop: 5,
      spacingLeft: 0,
      spacingRight: 0,
      backgroundColor: 'rgba(0,0,0,0)'
    },
    title: {
      text: ''
    },
    legend: {
      enabled:false
    },
    xAxis: {
      minTickInterval: 5,
      title: {
        text: 'Time (Years)'
      }
    },
    yAxis: {
      title: {
        text: 'Distribution (ha)'
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
      crosshairs: false,
      enabled:false
    },
    plotOptions: {
      area: {
        fillOpacity: 0.5,
        marker: {
          enabled:false
        }
      }
    },
    credits: {
      enabled: false
    },
    series: [{
        name: 'Original',
        //color: "#cccccc",
        data: [null]
      }, {
        name: 'New',
        //color: '#24CBE5',
        data: [null]
    }]
  });

  var options = Highcharts.merge(defaultOptions,options);

  return new Highcharts.Chart(options);
};

TimelineOverview.prototype.setData = function(data) {
  /*this.setupChart(this.container,"1.1",0);
  this.setupChart(this.container,"1.1.1",1);*/

  this.data = data;

  if (this.baseID) {
      this.baseData = this.fetchTimeline(this.baseID);
  }

  this._recursiveCreateChart(this.data[0]);

};

TimelineOverview.prototype._recursiveCreateChart = function(elem) {

  if (elem.hasOwnProperty("ID") && elem.hasOwnProperty("occupied")) {
    if (elem.occupied.length > 0) {
      var chartID = "timeline"+elem.ID+"-chart";

      // if chart already exists update it
      if (!this.charts[elem.ID]) {
        //create chart
        this.setupChart(this.container,chartID,elem.ID);
      }

      var chart = this.charts[elem.ID];
      this.updateChart(elem,elem.ID);

      if (this.baseData && elem.ID != this.baseID) {
        chart.series[0].setData(this.baseData.occupied.slice(0));
      }
      chart.series[1].setData(elem.occupied.slice(0));

      this.chartN++;
    }
  }

  //create children charts
  for (i in elem.children) {
		this._recursiveCreateChart(elem.children[i]);
	}
}


TimelineOverview.prototype.setBaseID = function(id) {
  this.baseID = id;
}

TimelineOverview.prototype.setID = function(id) {
  this.lastTimeline = this.ID;
  this.ID = id;
  $('.tlCard').removeClass("active");
  $("#timeline"+id).addClass("active");
}

TimelineOverview.prototype.setTimelineData = function(id,data) {
  if (data.hasOwnProperty("children")) {
    delete data.children
  }

  //get node
  node = this.fetchTimeline(id)

  for (key in data) {
    if (key != "ID"){
      node[key] = data[key];
    }
  }

  this._partialUpdate(id);
}

TimelineOverview.prototype.addPoint = function (id,idx,val) {
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

TimelineOverview.prototype.fetchTimeline = function(id) {
	return this._recursiveSearchData(id, this.data[0]);
}

TimelineOverview.prototype._recursiveSearchData = function(id, elem) {
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

function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}


//fire callbacks
TimelineOverview.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
};

//set callback
TimelineOverview.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
};
