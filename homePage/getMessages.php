#!/usr/bin/php
<?php
<<<<<<< HEAD

    include("../includes/dbconnect.php");
    // $insert = pg_query($db, "INSERT INTO users VALUES (2,'Vu', 'hunter2',NULL,NULL,NULL,NULL)");
    // $result = pg_query($db, "SELECT * FROM users");
    // echo "string";
    // while ($row = pg_fetch_row($result)) {
    //     echo "uname: $row[0]\n";
    // }
    //
    $last_id = 0;
    $messages = pg_query($db, "SELECT *
                               FROM messages
                               WHERE messages.time > $last_id
                               LIMIT 10
                               ORDER BY messages.time");

    while ($row = pg_fetch_row($messages)) {
      $('msg_history'.append($row[1]) + $messageAppend);
      if ($row[0] >= $last_id) {
        $last_id = $row[0];
      }
=======
    include("includes/dbconnect.php");
    // $insert = pg_query($db, "INSERT INTO users VALUES (2,'Vu', 'hunter2',NULL,NULL,NULL,NULL)");
    $result = pg_query($db, "SELECT username FROM users");

    while ($row = pg_fetch_row($result)) {
        echo "uname: $row[0]\n";
>>>>>>> 8495ca18e3aae55e3a5edafd5952cb99b7013d75
    }

    $db.pg_close();
?>
