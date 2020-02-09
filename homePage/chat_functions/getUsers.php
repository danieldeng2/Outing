#!/usr/bin/php
<?php

    @ob_end_clean();
    include("../../includes/dbconnect.php");

    $users = pg_query($db, "SELECT *
<<<<<<< HEAD
                            FROM users
                            WHERE group == 1
                            LIMIT 5");
=======
                               FROM users
                               WHERE group == 1
                               LIMIT 5");
>>>>>>> 3ffc8ed243da7272e8b0b4680c23a904948f0f81

    if (!$db) {
      echo "query error";
    }

    while ($row = pg_fetch_assoc($users)){
      echo $row["content"] . "," . $row["writer"] . "," . $row["time"] . "</br>";
    }


    $db.pg_close();


?>
