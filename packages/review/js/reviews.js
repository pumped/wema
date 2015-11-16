/* ---

Events:
 - newTimeline
 - userSelected

--- */

function Review() {
  this.callbacks = {};
  this.costGraph;
  this.managementGraph;
  this.setup();
  this.id = -1;
  this.costs;
  this.costSummaries;

  this.costLookup = {
    "delimitation":{"id":"d_range","cost":300},
    "prevention":{"id":"p_range","cost":0},
    "removal":{"id":"r_range","cost":1800},
    "containment":{"id":"c_range","cost":1200},
    "intensiveControl":{"id":"ic_range","cost":1200},
    "assetProtection":{"id":"ap_range","cost":600}
  };
};

Review.prototype.setup = function() {

};

Review.prototype.setID = function(id) {
  if (id != this.id) {
    this.id = id;
    var data = this.fetchTimeline(id);
    //if it exists in the data
    if (data) {
      this.setupManagementGraph();
      this.setupCostGraph();
      this._updateData();
    }
  }
};

Review.prototype.setData = function(data) {
  this.data = data;
  if (this.id != -1) {
    this._updateData();
  }
};

//fire callbacks
Review.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
};

//set callback
Review.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
};

Review.prototype.setupArea = function(elem) {
  if ($(elem).html() == "") {
    console.log("setup");
    $(elem).append("blah");
  }
}


Review.prototype.setupManagementGraph = function() {
  if (this.managementGraph) {
    return;
  }

  this.managementGraph = new Highcharts.Chart({
        chart: {
            type: 'column',
            renderTo: 'reviewManagementGraph'
        },
        colors: ['#ffe573', '#F9A404', '#00BB3F', '#FF8973', '#3877D8',
   '#ff2800'],
        title: {
            text: '',//'Predicted Area (Ha) Requiring Active Management'
        },
        legend: {
          enabled:false
        },
        credits: {
          enabled:false
        },
        xAxis: {
            crosshair: true,
            title: {
              text: ''
            },
            minTickInterval: 5,
            labels: {
              enabled:false
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Area (Ha)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:13px">Year {point.key}</span><table style="width:150px">',
            pointFormat: '<tr><td style="font-size:12px; color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="font-size:10px; padding:0"><b>{point.y:.0f} ha</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    },
                    formatter: function(){
                      if (this.y > 1000) {
                        return Math.round(this.y/1000) + "k";
                      }
                      if (this.y > 0) {
                        return Math.round(this.y);
                      }
                      return "";
                    }
                }
            },
            series: {
                groupPadding: 0
            }
        },
        series: [{
            name: 'Delimitation',
        }, {
            name: 'Prevention',
        }, {
            name: 'Eradication',
        }, {
            name: 'Containment',
        }, {
            name: 'Intensive Control',
        }, {
            name: 'Asset Protection',
        }]
    });
}

Review.prototype.setupCostGraph = function() {
  if (this.costGraph) {
    return;
  }

  this.costGraph = new Highcharts.Chart({
        chart: {
            type: 'column',
            renderTo: 'reviewCostGraph'
        },
        colors: ['#ffe573', '#F9A404', '#00BB3F', '#FF8973', '#3877D8',
   '#ff2800'],
        title: {
            text: '',//'Predicted Cost for Management Activities',
            enabled: false
        },
        legend: {
          enabled:false
        },
        credits: {
          enabled:false
        },
        xAxis: {
            crosshair: true,
            title: {
              text: 'Year'
            },
            minTickInterval: 5
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cost ($)'
            },
            reversed: true
        },
        tooltip: {
            headerFormat: '<span style="font-size:13px">Year {point.key}</span><table style="width:150px">',
            pointFormat: '<tr><td style="font-size:12px; color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="font-size:10px; padding:0"><b>${point.y:.0f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    },
                    formatter: function(){
                      if (this.y > 1000) {
                        return "$" + (this.y/1000) + "k";
                      }
                      return "";
                    }
                }
            },
            series: {
                groupPadding: 0
            }
        },
        series: [{
            name: 'Delimitation',
        }, {
            name: 'Prevention',
        }, {
            name: 'Eradication',
        }, {
            name: 'Containment',
        }, {
            name: 'Intensive Control',
        }, {
            name: 'Asset Protection',
        }]
    });
}

Review.prototype._updateData = function() {
  var data = this.fetchTimeline(this.id);

  if (this.id != -1 && this.managementGraph && this.data) {
    this.managementGraph.series[0].setData(data.d_range,false);
    this.managementGraph.series[1].setData(data.p_range,false);
    this.managementGraph.series[2].setData(data.r_range,false);
    this.managementGraph.series[3].setData(data.c_range,false);
    this.managementGraph.series[4].setData(data.ic_range,false);
    this.managementGraph.series[5].setData(data.ap_range);
  }

  if (this.id != -1 && this.managementGraph && this.data) {
    var costs = this.calculateCosts(data);
    this.costGraph.series[0].setData(costs.delimitation,false);
    this.costGraph.series[1].setData(costs.prevention,false);
    this.costGraph.series[2].setData(costs.removal,false);
    this.costGraph.series[3].setData(costs.containment,false);
    this.costGraph.series[4].setData(costs.intensiveControl,false);
    this.costGraph.series[5].setData(costs.assetProtection);
    this.updateAreaSummary();
  }
}

Review.prototype.getCostsAt = function(year,summarised) {
  //console.log(this.costs);
  //check objects exist
  if (this.costs && this.costSummaries) {
    //if summarised pull from summaries
    var costs;
    if (summarised){
      costs = this.costSummaries
    } else {
      costs = this.costs;
    }

    //summarise
    var summed = 0;
    for (var type in costs) {
      summed += costs[type][year];
    }

    return summed;
  }
  return 0;
}

Review.prototype.updateAreaSummary = function() {
  var len = this.haSummaries["removal"].length-1;
  $(".zoneD .value").html(this.haSummaries["delimitation"][len]);
  $(".zoneP .value").html("N/A");
  $(".zoneR .value").html(this.haSummaries["removal"][len]);
  $(".zoneC .value").html(this.haSummaries["containment"][len]);
  $(".zoneIC .value").html(this.haSummaries["intensiveControl"][len]);
  $(".zoneAP .value").html(this.haSummaries["assetProtection"][len]);
}

Review.prototype.calculateCosts = function(data) {

  //calculate based on range of active management
  var costs = {};
  var costSummaries = {};
  var haSummaries = {};
  for (var i in this.costLookup) { //for each type
    var type = this.costLookup[i].id;
    var costPerHa = this.costLookup[i].cost

    if (data.hasOwnProperty(type)) { //if the data has that id e.g d_range
      var activeManagementAreas = data[this.costLookup[i].id];
      var sum = 0;
      var haSum = 0;

      for (var j in activeManagementAreas) { //for each year in that id d_range[0,1,2...]
        if (!costs.hasOwnProperty(i)) {costs[i]=[]; costSummaries[i]=[]; haSummaries[i]=[];} //setup costs array if it doesn't exist
        var cost = activeManagementAreas[j] * costPerHa; //cost = management area * fee
        costs[i].push(cost)
        sum += cost;
        haSum += activeManagementAreas[j];
        costSummaries[i].push(sum);
        haSummaries[i].push(haSum);
      }
    }
  }

  this.costs = costs;
  this.costSummaries = costSummaries;
  this.haSummaries = haSummaries;
  return costs;
}

Review.prototype.update = function() {
  this._updateData();
}

Review.prototype.fetchTimeline = function(id) {
  if (this.data) {
    return this._recursiveSearchData(id, this.data);
  }
  return false;
}

Review.prototype._recursiveSearchData = function(id, elem) {
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
