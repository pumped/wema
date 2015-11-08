/* ---

Events:
 - newTimeline
 - userSelected

--- */

function Modals() {
  this.callbacks = {};
  this.setup();
};

Modals.prototype.setup = function() {
  this.runModal = new RunModal();

  this.userModal = new UserModal();
  this.userModal.callbacks = this.callbacks;

  this.newTimelineModal = new NewTimelineModal();
  this.newTimelineModal.callbacks = this.callbacks;
};

//fire callbacks
Modals.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
}

//set callback
Modals.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
}



// Get user modal
function UserModal() {
  this.callbacks = {};
  this.users = {1:{"name":"Jeremy"},2:{"name":"Trina"},3:{"name":"Ian"},4:{"name":"Dylan"}};
  this.colors = ["#FF0D9A","#82E281","#FFB11C","#658BE4","#ff5c5c","#5cf0ff","#ffa55c"];
  this.activeUser = 0;

  var html = '    <div class="modal fade" id="userSelectModal" tabindex="-1" role="dialog" aria-labelledby="userSelectModal">\
        <div class="modal-dialog" role="document">\
          <div class="modal-content newTimeline">\
            <div class="modal-header">\
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
              <h4 class="modal-title" id="myModalLabel">Who\'s Adding Data?</h4>\
            </div>\
            <div class="modal-body">\
              <div class="row">\
              <div class="row otherUsers">\
  							<h5>Existing Users</h5>\
                <div class="col-xs-12 userSelectors">\
                </div>\
  							<br/><br/>\
  							<div class="col-xs-12 newUserContainer">\
  								<form class="form-inline">\
  									<div class="form-group">\
  										<h5>New User</h5>\
  										<input type="text" class="form-control" id="inputNewUser" placeholder="New User">\
  										<button id="newUserSave" type="button" class="btn btn-primary">Add</button>\
  									</div>\
  								</form>\
  							</div>\
              </div>\
            </div>\
            <div class="modal-footer">\
              <button id="newUserSubmitButton" type="button" class="btn btn-primary" data-dismiss="modal">Save and Continue</button>\
            </div>\
          </div>\
        </div>\
      </div>';
  $('body').append(html);
  this.setup();
}

UserModal.prototype.show = function() {
  $("#userSelectModal").modal("show");
}

UserModal.prototype.getData = function(url) {
  var that = this;
  $.getJSON(url,function(data){
    console.log(data);
    that.users = data;
    that.updateData();
  });
}

UserModal.prototype.saveData = function(url) {
  //$.post(url,{"users":JSON.stringify(this.users)});
}

UserModal.prototype.updateData = function() {
  console.log("updating");

  $('.userSelectors').html("");

  var idx = 0;

  console.log(this.users);
  for (var i in this.users) {
    if (idx < this.colors.length) {
        var color = this.colors[idx];
    } else {
      var color = "#eeac00"
    }

    $('.userSelectors').append(' \
      <div class="userSelector" data-id="'+i+'"> \
        <div class="userIcon" style="background-color:'+color+'"></div> \
        <div class="userName">'+this.users[i].name+'</div> \
      </div> \
    ');

    idx++;
  }

  this.bindUserSelect();
}

UserModal.prototype.bindUserSelect = function() {
  var that = this;
  $('.userSelector').click(function userSelected(){
    $('.userSelector').removeClass("active");
    $(this).addClass("active");
    that.activeUser = parseInt($(this).data("id"));
  });
}

UserModal.prototype.setup = function() {
  var that = this;
  this.updateData();

  $('#newUserSave').click(function saveNewUser(){
    var name = $('#inputNewUser').val();
    $('#inputNewUser').val('');
    if (name != "" && name){
      var newUser = {};
      newUser.name = name;
      var key = that._getNewUserKey();

      that.users[key] = newUser;
      that.saveData();
      that.updateData();
    }
  });

  $("#newUserSubmitButton").click(function(){
    console.log(that.activeUser);
  });
}

UserModal.prototype._getNewUserKey = function() {
  var idx = 0;
  for (var i in this.users) {
    if (parseInt(i) > idx) {
      idx = parseInt(i);
    }
  }

  return idx + 1;
}

//fire callbacks
UserModal.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
}

//set callback
UserModal.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
}




/* --- Timeline modal --- */
function NewTimelineModal() {
  var html = '   \
  <div class="modal fade" id="newTimelineModal" tabindex="-1" role="dialog" aria-labelledby="newTimelineModal">\
        <div class="modal-dialog" role="document">\
          <div class="modal-content newTimeline">\
            <div class="modal-header">\
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
              <h4 class="modal-title" id="myModalLabel">Create New Strategy</h4>\
            </div>\
            <div class="modal-body">\
              <div class="row">\
                <div class="col-xs-6">\
                  <div id="newBlankModelButton" class="newTimelineButtons btn btn-default">\
                    <i class="fa fa-file-o"></i>\
                    <span class="title">Blank</span>\
                    <span class="subtitle">Create a new scenario with no management actions.</span>\
                  </div>\
                </div>\
                <div class="col-xs-6">\
                  <div id="duplicateModelButton" class="newTimelineButtons btn btn-default">\
                    <i class="fa fa-files-o"></i>\
                    <span class="title">Duplicate Current</span>\
                    <span class="subtitle">Create a new scenario with the current management actions.</span>\
                  </div>\
                </div>\
              </div>\
            </div>\
          </div>\
        </div>\
      </div>';

  $('body').append(html);

  this.setup();
  this.callbacks = {};
};

NewTimelineModal.prototype.setup = function() {
  var that = this;
  $("#newBlankModelButton").click(function(){
    that._event("newTimeline",{"duplicate":false});
    that.event
    $('#newTimelineModal').modal("hide");
  });

  $("#duplicateModelButton").click(function(){
    $('#newTimelineModal').modal("hide");
    that._event("newTimeline",{"duplicate":true});
  });
};

NewTimelineModal.prototype.show = function() {
  $('#newTimelineModal').modal("show");
};

//fire callbacks
NewTimelineModal.prototype._event = function(type,data) {
	if (this.callbacks.hasOwnProperty(type)) {
		for (var i in this.callbacks[type]) {
			if (typeof this.callbacks[type][i] == "function") {
				this.callbacks[type][i](data);
			}
		}
	}
};

//set callback
NewTimelineModal.prototype.on = function(type,callback) {
	if (!this.callbacks.hasOwnProperty(type)) {
		this.callbacks[type] = [];
	}
	this.callbacks[type].push(callback);
};




/* --- Load Modals --- */

function RunModal() {
  var html = '<div class="modal fade" id="runModelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
    <div class="modal-dialog" role="document">\
      <div class="modal-content">\
        <div class="modal-header">\
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
          <h4 class="modal-title" id="myModalLabel">Computing</h4>\
        </div>\
        <div class="modal-body">\
          <div class="progress">\
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width:0%">\
              0%\
            </div>\
          </div>\
          <div class="modelStatus">Exporting Data</div>\
        </div>\
      </div>\
    </div>\
  </div>';

  $('body').append(html);
}

RunModal.prototype.show = function() {
  $("#runModelModal").modal("show");
  this.progressBarUpdate(0);
};

RunModal.prototype.progressBarUpdate = function(percentage) {
  $("#runModelModal .progress-bar").css("width",percentage+"%");
  $("#runModelModal .progress-bar").html(percentage+"%");

  if (percentage >= 70) {
    return;
  }

  if (percentage <= 60) {
    $("#runModelModal .modelStatus").html("Exporting");
  }

  if (percentage >= 60) {
    $("#runModelModal .modelStatus").html("Running");
  }

  var that = this;
  percentage += 2;
  setTimeout(function() {
    that.progressBarUpdate(percentage);
  },300);
};

RunModal.prototype.hide = function() {
  $("#runModelModal").modal("hide");
}
