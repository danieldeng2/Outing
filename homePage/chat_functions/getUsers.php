#!/usr/bin/php
<?php

    @ob_end_clean();
    include("../../includes/dbconnect.php");

    $users = pg_query($db, "SELECT *
                               FROM users
                               WHERE group == 1
                               LIMIT 5");

    if (!$db) {
      echo "query error";
    }

    while ($row = pg_fetch_assoc($users)){
      // $content = $row['content'];
      // $entities = $row['entities'];
      // $writer = $row['writer'];
      // $group = $row['group'];
      // $time = $row['time'];
      echo $row["content"] . "," . $row["writer"] . "," . $row["time"] . "</br>";
    }


    $db.pg_close();


?>
