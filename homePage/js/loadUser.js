var incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
var outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
var messageTimePrepend='</p>';
var messageTimeAppend='</span></div></div>';

$(document).ready(function(){
$.post(
  "chat_functions/getUsers.php",
  function(data,status) {loadEvents(data);}
  );

loadEvents();


});


function loadEvents(data){
  if (data != undefined){

}
