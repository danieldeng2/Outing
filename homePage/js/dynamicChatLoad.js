$(document).ready(function(){
  $.post(
    "admin/loadEvents.php",
    function(data,status) {loadEvents(data);}
    );

  loadEvents();


});

alert("dfsd");

$("#msg_history").append("<span> got added </span>");

function loadEvents(data){
  if(data != undefined){
  $( "#msg_history" ).append(data);}
}
