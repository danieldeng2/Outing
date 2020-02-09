var beforeName = '<li class="list-group-item border-0"><div class="row no-gutters"><div class="col-auto"><img src="icons/profile.png" width="64" height="64" class="img-fluid" alt=""></div><div class="col"><div class="card-block px-2"><h6 class="card-title mb-0">';
var afterName = '<small class="card-subtitle text-muted">5 mins</small> </h6><small class="card-text"><b>Payment Info: </b>696969 420420 <a href="#">link</a></small></div></div></div></li>';

var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){
$.post(
  "chat_functions/getUsers.php",
  {grouNo : groupId}
  function(data,status) {loadEvents(data);}
  );

loadEvents();


});


function loadEvents(data){
  if (data != undefined){

  }
}
