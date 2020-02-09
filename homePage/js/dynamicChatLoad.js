  var incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
  var outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
  var messageTimePrepend='</p>';
  var messageTimeAppend='</span></div></div>';

$(document).ready(function(){
  $.post(
    "chat_functions/getMessages.php",
    function(data,status) {loadEvents(data);}
    );

  loadEvents();


});


function loadEvents(data){
  if (data != undefined){
    var linesArray = data.split("<br>");
    linesArray.forEach(valuesArray);
  }
}

function valuesArray(valArray) {
  var arr = valArray.split(",");
  if (arr[1] == arr[1]) {
    alert(arr[0]);
    $("#msg_history").append(incomingMessagePrepend + data + messageTimePrepend + arr[2] + messageTimeAppend);
  } else {
    $("#msg_history").append(outgoing_msgMessagePrepend + data + messageTimePrepend + arr[2] + messageTimeAppend);
  }
}
