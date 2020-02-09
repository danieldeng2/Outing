// $(document).ready(test());
alert("sadf");
function test() {
  // console.log("fdsa");
  alert("sadf");
}

$(document).ready(function(){
  // $.ajax({
  //   url: "chat_functions/getMessages.php",
  //
  //   success: function(data) {
  //     alert("asdf");
  //   },
  //
  // });
  //
  // $.post(
  //   "chat_functions/getMessages.php",
  //   function(data, status) {
  //     alert("asdf");
  //     addMessageToChat("asdfadsf");
  //     test();
  //   });

  $("#msg_history").load("chat_functions/getMessagse.php");
  alert('dfad');
    // test();
    // addMessageToChat('ffffck u php');

});

alert("asdf");
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
