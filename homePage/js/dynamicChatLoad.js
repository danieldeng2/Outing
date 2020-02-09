$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {alert(data);}
    alert("gothere!");
  );
});


function addMessageToChat(data) {
  alert("got into add message");
  $("msg_history").append("<script>alert('asdfdsaf')</script>");
  $("msg_history").append(data);
}

function resetForm() {
  document.getElementById("messageBar").reset();
}
