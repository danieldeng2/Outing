$(document).ready(function(){
  alert("this works");
});

$(document).ready(function(){
  $("#msg_history").load("chat_functions/getMessagse.php");
});

// GENERATE FIRST BATCH OF MESSAGES
//This will be where you do your SQL and PHP first
function addMessageToChat(data) {
  if (data != undefined)
    $('#msg_history').append(data);
  }
  alert("fdsasdf");
}

function test() {
  alert("this works");
}


$("#msg_history").scrollTop($("#msg_history")[0].scrollHeight);

// Assign scroll function to chatBox DIV
$('#msg_history').scroll(function(){
    if ($('#msg_history').scrollTop() == 0){
        // Display AJAX loader animation
         $('#loader').show();


function resetMessage() {
  document.getElementById("messageBar").reset();
}
