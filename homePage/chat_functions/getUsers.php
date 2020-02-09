#!/usr/bin/php
<?php

    @ob_end_clean();
    include("../../includes/dbconnect.php");

    $users = pg_query($db, "SELECT *
                            FROM users
                            WHERE group == ($_GET["groupNo"])
                            LIMIT 5");

    if (!$db) {
      echo "query error";
    }

    while ($row = pg_fetch_assoc($users)){
      echo $row["content"] . "," . $row["writer"] . "," . $row["time"] . "</br>";
    }


    $db.pg_close();


?>
