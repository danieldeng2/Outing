var url = window.location.href;
var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){

});


$("#messageBar").submit(
  function ( event ) {
    event.preventDefault();
    $.post(
      "chat_functions/putMessages.php",
     {message:$("#messageContent").val(), groupid : groupId},

      function(data, status) {alert(data);}
    );

  }
);

function resetField() {
  document.getElementById('messageBar').reset();
}
