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
    var linesArray = data.split("</br>");
    for (var i = 0; i < linesArray.length; i++) {
        var valsArray = linesArray[i].split(",");
        for (var j = 0; j < valsArray.length; j++) {
<<<<<<< HEAD
            if (valsArray[1] == $_COOKIE("userid"))) {
=======
            if (valsArray[1] == getCookie("username")) {
>>>>>>> 3ffc8ed243da7272e8b0b4680c23a904948f0f81
                $("#msg_history").append(incomingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
              } else {
                  $("#msg_history").append(outgoingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
              }
          // $("#msg_history").append(incomingMessagePrepend + linesArray[i] + messageTimePrepend + messageTimeAppend);
          // $("#msg_history").append(valsArray[j]);
        }
    //   alert(i);
    }
  }
}
