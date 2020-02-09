$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {addMessageToChat(data);}
  );
  alert("fdsf");
});

alert("got out of first");

function addMessageToChat(data) {
  $("msg_history").load(data);
  alert("loaded Msg");
}

function resetForm() {
  document.getElementById("messageBar").reset();
}
