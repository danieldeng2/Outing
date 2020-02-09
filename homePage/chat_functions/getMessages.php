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
                               ORDER BY messages.time
                               LIMIT 10");

    while ($row = pg_fetch_assoc($messages)) {
      $content = $row['content'];
      $entities = $row['entities'];
      $writer = $row['writer'];
      $group = $row['group'];
      $time = $row['time'];

      // $status = $writer === $writer;

      // if ($writer == $writer) {
        echo $incomingMessagePrepend . $content . $messageTimePrepend;
        echo $time . $messageAppend;
        // } else {
        // echo $outgoingMessagePrepend . $content . $messageAppend;
    }

    $db.pg_close();


?>
