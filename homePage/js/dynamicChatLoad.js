var incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
var outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
var messageTimePrepend='</p>';
var messageTimeAppend='</span></div></div>';
var url = window.location.href;
var idStart = url.indexOf("id=");
var groupId = url.substring(idStart + 3, idStart + 4);
var curTime = 0;

$(document).ready(function(){
  setInterval(
    function() {

    $.post(
      "chat_functions/getMessages.php",
      { groupNo : groupId},
      function(data,status) {loadEvents(data);}
      );

    loadEvents();

  }, 5000);

});


function loadEvents(data){
if (data != undefined){
  var linesArray = data.split("</br>");
  for (var i = 0; i < linesArray.length; i++) {
      var valsArray = linesArray[i].split(",");
      for (var j = 0; j < valsArray.length; j++) {
          if (valsArray[1] === (getCookie("userid"))) {
              $("#msg_history").append(incomingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
              curTime = Math.max(valsArray[2], curTime);
              alert(valsArray[2]);
            } else {
                $("#msg_history").append(outgoingMessagePrepend + valsArray[0] + messageTimePrepend + messageTimeAppend);
                curTime = Math.max(valsArray[2], curTime);
              alert(valsArray[2]);  
            }
      }
  }
}
}
