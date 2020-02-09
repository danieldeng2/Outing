#!/usr/bin/php
<?php

 $incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
 $outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
 $messageTimePrepend='</p>';
 $messageTimeAppend='</span></div></div>';

    @ob_end_clean();
    include("../../includes/dbconnect.php");

    $messages = pg_query($db, "SELECT *
                               FROM messages
                               WHERE groupId = '".$_POST["groupNo"]."'
                               AND content IS NOT NULL
                               AND '".$_POST["curTime"]."' < messages.time
                               ORDER BY messages.time
                               LIMIT 5");

    if (!$db) {
      echo "query error";
    }

    while ($row = pg_fetch_assoc($messages)){
      echo $row["content"] . "," . $row["writer"] . "," . $row["time"] . "</br>";
    }


    $db.pg_close();


?>
