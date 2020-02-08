
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