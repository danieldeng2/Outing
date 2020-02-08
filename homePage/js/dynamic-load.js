$(document).ready(function(){
  

});


// GENERATE FIRST BATCH OF MESSAGES
//This will be where you do your SQL and PHP first


// Not related to this but just saving here lmao

for(var i=0;i<20;i++){
    $('#msg_history').prepend($outMessagePrepend + Date()+ $messageAppend);
}

$("#msg_history").scrollTop($("#msg_history")[0].scrollHeight);

// Assign scroll function to chatBox DIV
$('#msg_history').scroll(function(){
    if ($('#msg_history').scrollTop() == 0){
        // Display AJAX loader animation
         $('#loader').show();
