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
    "delimitation":{"id":"d_range","cost":300,"costID":"d_cost","costSumID":"d_costSum","haSum":"d_haSum"},
    "prevention":{"id":"p_range","cost":0,"costID":"p_cost","costSumID":"p_costSum","haSum":"p_haSum"},
    "removal":{"id":"r_range","cost":1800,"costID":"r_cost","costSumID":"r_costSum","haSum":"r_haSum"},
    "containment":{"id":"c_range","cost":1200,"costID":"c_cost","costSumID":"c_costSum","haSum":"c_haSum"},
    "intensiveControl":{"id":"ic_range","cost":1200,"costID":"ic_cost","costSumID":"ic_costSum","haSum":"ic_haSum"},
    "assetProtection":{"id":"ap_range","cost":600,"costID":"ap_cost","costSumID":"ap_costSum","haSum":"ap_haSum"}
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
    this.setupManagementGraph();
    this.setupCostGraph();
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
                text: 'Managed Area (Ha)',
                style: {
                  "font-size": "20px",
                  "color":"#333"
                }
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
                text: 'Cost ($)',
                style: {
                  "font-size": "20px",
                  "color":"#333"
                }
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
                      if (this.y > 1000 && this.y <100000) {
                        return "$" + parseInt(this.y/100)/10 + "k";
                      } if (this.y > 100000) {
                        return  "$" + parseInt(this.y/1000) + "k";
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

  console.log("update report");
  console.log(this.id);
  console.log(this.managementGraph);
  console.log(data);

  if (this.id != -1 && this.managementGraph && data) {
    this.managementGraph.series[0].setData(data.d_range.slice(0),false);
    this.managementGraph.series[1].setData(data.p_range.slice(0),false);
    this.managementGraph.series[2].setData(data.r_range.slice(0),false);
    this.managementGraph.series[3].setData(data.c_range.slice(0),false);
    this.managementGraph.series[4].setData(data.ic_range.slice(0),false);
    this.managementGraph.series[5].setData(data.ap_range.slice(0));
  }

  if (this.id != -1 && this.managementGraph && data) {
    this.costGraph.series[0].setData(data.d_cost.slice(0),false);
    this.costGraph.series[1].setData(data.p_cost.slice(0),false);
    this.costGraph.series[2].setData(data.r_cost.slice(0),false);
    this.costGraph.series[3].setData(data.c_cost.slice(0),false);
    this.costGraph.series[4].setData(data.ic_cost.slice(0),false);
    this.costGraph.series[5].setData(data.ap_cost.slice(0));
    this.updateAreaSummary();
  }
}

Review.prototype.getCostsAt = function(year,summarised) {
  //console.log(this.costs);
  //check objects exist
  var data = this.fetchTimeline(this.id);
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

Review.prototype.updateAreaSummary = function() {
  var data = this.fetchTimeline(this.id);
  if (data) {
    var len = data["r_haSum"].length-1;
    $(".zoneD .value").html(data["d_haSum"][len]);
    $(".zoneP .value").html("N/A");
    $(".zoneR .value").html(data["r_haSum"][len]);
    $(".zoneC .value").html(data["c_haSum"][len]);
    $(".zoneIC .value").html(data["ic_haSum"][len]);
    $(".zoneAP .value").html(data["ap_haSum"][len]);
  }
}

// Review.prototype.calculateCosts = function(data) {
//
//   //calculate based on range of active management
//   var costs = {};
//   var totalCost = 0;
//   var costSummaries = {};
//   var haSummaries = {};
//   for (var i in this.costLookup) { //for each type
//     var type = this.costLookup[i].id;
//     var costPerHa = this.costLookup[i].cost
//
//     if (data.hasOwnProperty(type)) { //if the data has that id e.g d_range
//       var activeManagementAreas = data[this.costLookup[i].id];
//       var sum = 0;
//       var haSum = 0;
//
//       for (var j in activeManagementAreas) { //for each year in that id d_range[0,1,2...]
//         if (!costs.hasOwnProperty(i)) {costs[i]=[]; costSummaries[i]=[]; haSummaries[i]=[];} //setup costs array if it doesn't exist
//         var cost = activeManagementAreas[j] * costPerHa; //cost = management area * fee
//         costs[i].push(cost)
//         sum += cost;
//         haSum += activeManagementAreas[j];
//         costSummaries[i].push(sum);
//         haSummaries[i].push(haSum);
//         totalCost += cost;
//       }
//     }
//   }
//
//   //calculate prevention
//   if (data.hasOwnProperty("prevention")) {
//     var amt = parseInt(data["prevention"][0]);
//     if (costs.hasOwnProperty("prevention")) {
//       var prevention = costs["prevention"];
//       var preventionSummary = costSummaries["prevention"];
//       var cost = ((totalCost / 100) * amt) / prevention.length;
//       var sum = 0;
//       console.log("totalCost: " + totalCost);
//       for (var i in prevention) {
//         prevention[i] = cost;
//         sum += cost;
//         preventionSummary[i] = sum;
//       }
//     }
//   }
//
//   this.costs = costs;
//   this.costSummaries = costSummaries;
//   this.haSummaries = haSummaries;
//   return costs;
// }

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
