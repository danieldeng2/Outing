$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {addMessageToChat(data);}
  );
  alert("fdsf");
});

function addMessageToChat(data) {
  $("msg_history").load(data);
}

function resetForm() {
  document.getElementById("messageBar").reset();
}
