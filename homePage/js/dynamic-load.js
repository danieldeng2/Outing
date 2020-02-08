$(document).ready(function(){


});


// GENERATE FIRST BATCH OF MESSAGES
//This will be where you do your SQL and PHP first

 var outMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
 var inMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
 var messageAppend='</p><span class="time_date"> 11:01 AM | June 9</span></div></div>';

function addMessages(messageContent, isMessageIncoming)  {
  if (isMessageIncoming) {
    $('#msg_history').append(inMessagePrepend + messageContent + messageAppend);
  } else {
    $('#msg_history').append(outMessagePrepend + messageContent + messageAppend);
  }
}


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

      // Youd do Something like this here
      // Query the server and paginate results
      // Then prepend
      /*  $.ajax({
            url:'getmessages.php',
            dataType:'html',
            success:function(data){
                $('.inner').prepend(data);
            };
        });*/
        //BUT FOR EXAMPLE PURPOSES......
        // We'll just simulate generation on server


        //Simulate server delay;
        setTimeout(function(){
        // Simulate retrieving 4 messages
        for(var i=0;i<4;i++){

        $('#msg_history').prepend($outMessagePrepend + Date() + $messageAppend);

            }
            // Hide loader on success
            $('#loader').hide();
            // Reset scroll
            $('#msg_history').scrollTop(30);
        },780);
    }
});
