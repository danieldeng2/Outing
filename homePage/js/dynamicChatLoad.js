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

$( "#signUpForm" ).submit(
function( event ) {
    event.preventDefault();

    $.post(
        "admin/signUp.php",
        $(this).serialize(),
        function(data,status) {alert(data);}
        );
  }
);

$( "#signInForm" ).submit(
  function( event ) {
      event.preventDefault();
      $.post(
          "admin/signIn.php",
          $(this).serialize(),
          function(data,status) {alert(data);}
          );
    }
  );

$( "#newEventForm" ).submit(
  function( event ) {
      event.preventDefault();
      $.post(
          "admin/newEvent.php",
          $(this).serialize(),
          function(data,status) {alert(status);}
          );
    }
  );
