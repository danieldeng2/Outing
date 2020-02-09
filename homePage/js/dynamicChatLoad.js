$(document).ready(function(){
  $.post(
    "admin/loadEvents.php",
    function(data,status) {loadEvents(data);}
    );

  loadEvents();

  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {addMessageToChat(data);}
  );
  alert("fdsf");
});

function addMessageToChat(data) {
  $("msg_history").load(data);
}

function loadEvents(data){
  if(data != undefined){
  $( "#rowId" ).append(data);}
}

function resetForm() {
  document.getElementById("messageBar").reset();
}
