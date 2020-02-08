$(document).ready(function(){
  $.get("../chat_functions/getMessages.php",
    function(data) {
      addMessageToChat(data);
    });
    addMessageToChat("ffffck u php");
});


// GENERATE FIRST BATCH OF MESSAGES
//This will be where you do your SQL and PHP first
function addMessageToChat(str) {
  $('#msg_history').prepend(str);
}

// Not related to this but just saving here lmao

for(var i=0;i<20;i++){
    $('#msg_history').prepend($outMessagePrepend + Date()+ $messageAppend);
}

<<<<<<< HEAD

=======
>>>>>>> 5060b3de6258397f7e85495527f392845e878e91
$("#msg_history").scrollTop($("#msg_history")[0].scrollHeight);

// Assign scroll function to chatBox DIV
$('#msg_history').scroll(function(){
    if ($('#msg_history').scrollTop() == 0){
        // Display AJAX loader animation
         $('#loader').show();
