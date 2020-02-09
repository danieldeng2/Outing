$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {addMessageToChat(data);}

    addMessageToChat();
  );
});

$('msg_history').append("appendeddddddddddddddddddd");
$('msg_history').prepend("prependeddddddddddddddddddd");


function addMessageToChat(data) {
  alert("got into add message");
  $('msg_history').append("<script>alert('asdfdsaf')</script>");
  $("msg_history").append(data);
}

function resetForm() {
  document.getElementById("messageBar").reset();
}
