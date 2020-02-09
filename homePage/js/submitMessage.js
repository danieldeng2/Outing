var url = window.location.href;
var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){

});

$("#messageBar").submit(
  function (event) {
    event.preventDefault();
    $.post(
      "chat_functions/putMessages.php",
      $(this).serialize(),
      function(data, status) {alert("message submitted");}
    );
    $.post(
      "chat_functions/putMessages.php",
       {groupid : groupId},
       function(data, status) {alert("done");}
    );
  }
);

function resetField() {
  document.getElementById('messageBar').reset();
}
