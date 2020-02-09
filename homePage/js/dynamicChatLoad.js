  var incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
  var outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
  var messageTimePrepend='</p>';
  var messageTimeAppend='</span></div></div>';
  var url = window.location.href;
  var idStart = url.indexOf("id=");
  var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){
  $(".msg_send_btn").click(function() {
    $("#messageBar").submit(function() {
        $.post(
          "chat_functions/putMessages.php",
          { message : , groupNo : groupId},
          function(data, status) {alert("message sent");}
        );
    });
  });
  loadEvents();


});


function loadEvents(data){
  if (data != undefined){
    var linesArray = data.split("</br>");
    for (var i = 0; i < linesArray.length; i++) {
        var valsArray = linesArray[i].split(",");
        for (var j = 0; j < valsArray.length; j++) {
            // if (valsArray[1] == ("userid")) {
                $("#msg_history").append(incomingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
              // } else {
              //     $("#msg_history").append(outgoingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
              // }
        }
    }
  }
}
