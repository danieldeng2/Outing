  var incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
  var outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
  var messageTimePrepend='</p>';
  var messageTimeAppend='</span></div></div>';
  var url = window.location.href;
  var idStart = url.indexOf("id=");
  var groupId = url.substring(idStart + 3, idStart + 4);

$(document).ready(function(){
  var text = $('#messageBar').val();  
  $(".msg_send_btn").click(function() {
    $("#messageBar").submit(function() {
        $.post(
          "chat_functions/putMessages.php",
          { message : text, groupNo : groupId},
          function(data, status) {alert("message sent");}
        );
    });
  });
  loadEvents();


});
