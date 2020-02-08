#!/usr/bin/php
<?php

 $incomingMessagePrepend='<div class="outgoing_msg"><div class="sent_msg"><p>';
 $outgoingMessagePrepend='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"></div><div class="received_msg"><div class="received_withd_msg"><p>';
 $messageAppend='</p><span class="time_date"> it works! </span></div></div>';


    include("../../includes/dbconnect.php");

    $messages = pg_query($db, "SELECT *
                               FROM messages
                               ORDER BY messages.time
                               LIMIT 10");

    while ($row = pg_fetch_row($messages)) {
      $content = $row['content'];
      $entities = $row['entities'];
      $writer = $row['writer'];
      $group = $row['group'];
      $time = $row['time'];

      // $status = $writer === $writer;

      // if ($writer == $writer) {
        echo $incomingMessagePrepend . $content . $messageAppend;
        // } else {
        // echo $outgoingMessagePrepend . $content . $messageAppend;
<<<<<<< HEAD
<<<<<<< HEAD
      }
<<<<<<< HEAD
<<<<<<< HEAD
=======
      // }
>>>>>>> dynamic load partially done
    }
=======
>>>>>>> Done fetching messages
=======
    }
>>>>>>> Deleted chat to pull
=======
      // }
    }
>>>>>>> 5060b3de6258397f7e85495527f392845e878e91

    $db.pg_close();


?>
