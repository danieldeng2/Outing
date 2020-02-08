#!/usr/bin/php
<?php

    include("../includes/dbconnect.php");
    // $insert = pg_query($db, "INSERT INTO users VALUES (2,'Vu', 'hunter2',NULL,NULL,NULL,NULL)");
    $messages = pg_query($db, "SELECT * FROM messages");
    // echo "string";
    // while ($row = pg_fetch_row($result)) {
    //     echo "uname: $row[0]\n";
    // }

    // $last_id = 0;
    // $messages = pg_query($db, "SELECT *
    //                            FROM messages
    //                            WHERE messages.time > $last_id
    //                            LIMIT 10
    //                            ORDER BY messages.time");

    while ($row = pg_fetch_row($messages)) {
      // $('msg_history'.append($row[1]) + $messageAppend);
      // if ($row[0] >= $last_id) {
      //   $last_id = $row[0];
      echo "<time>" . $row[5] . "</time>" ."\r\n";
      echo "<content>" . $row[1] . "</content>" . "\r\n";
      }

    $db.pg_close();
?>
