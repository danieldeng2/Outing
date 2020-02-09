var url = window.location.href;
var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){
  $.post(
    "admin/loadLeftColumn.php",
    {groupNo:groupId},
    function(data,status) {loadLeftColumn(data);}
    );

  $.post(
    "admin/loadRightColumn.php",
    {groupNo:groupId},
    function(data,status) {loadRightColumn(data);}
    );

  
    
});


function loadRightColumn(data){
  if(data != undefined){
    $( "#rightColumn" ).append(data);}
}

function loadLeftColumn(data){
  if(data != undefined){
    $( "#LeftColumnLoad" ).append(data);}
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
$( "#newPollForm" ).submit(
  function( event ) {
      event.preventDefault();
      var formData = $(this).serializeArray();
      formData.push({name: "groupNo", value: groupId });
      // alert (JSON.stringify(formData));
      $.post(
          "admin/newPoll.php",
          formData,
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
