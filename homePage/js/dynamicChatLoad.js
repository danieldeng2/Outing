$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {addMessageToChat(data);}

    addMessageToChat();
  );
});

function addMessageToChat(data) {
  if(data == undefined){
    alert("got into undefined message");
  } else {
    alert("got here");
    $("#msg_history").append("<script>alert('asdfdsaf')</script>");
    $("#msg_history").append(data);
  }
}

function resetForm() {
  document.getElementById("#messageBar").reset();
}

function testMessageAdding(){
  $("#msg_history").append("<span>adding works</span>");
}
