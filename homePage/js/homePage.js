$(document).ready(function(){
  $.post(
    "admin/loadEvents.php",
    function(data,status) {loadEvents(data);}
    );

  // loadEvents();


});

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function setPollSubmit(id){
  $( "#PollForm" +id).submit(
    function( event ) {
        event.preventDefault();
    
        $.post(
            "admin/submitPoll.php",
            $(this).serialize(),
            function(data,status) {
              $( "#PollForm" +id).html(data);
            }
            );
      }
    );
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
