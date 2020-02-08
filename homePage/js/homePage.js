$( "#signUpForm" ).submit(
function( event ) {
    event.preventDefault();

    $.post(
        "admin/signUp.php",
        $(this).serialize(),
        function(data,status) {alert(status);}
        );
  }
);

$( "#signInForm" ).submit(
  function( event ) {
      event.preventDefault();
      $.post(
          "admin/signIn.php",
          $(this).serialize(),
          function(data,status) {alert(status);}
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
  

