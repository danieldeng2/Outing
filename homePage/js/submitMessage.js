var url = window.location.href;
var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){

});

var messageContent = document.getElementById("messageContent").value;

$("#messageBar").submit(
  function ( event ) {
    event.preventDefault();
    alert("success");
    // $.post(
    //   "chat_functions/putMessages.php",
    //   {message : $(this).serialize(), groupid : groupId},
    //   function(data, status) {alert("message submitted");}
    // );

  }
);

function resetField() {
  document.getElementById('messageBar').reset();
}
