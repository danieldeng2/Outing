#!/usr/bin/php
<?php
    include("includes/dbconnect.php");
    // $insert = pg_query($db, "INSERT INTO users VALUES (2,'Vu', 'hunter2',NULL,NULL,NULL,NULL)");
    $result = pg_query($db, "SELECT username FROM users");

    while ($row = pg_fetch_row($result)) {
        echo "uname: $row[0]\n";
    }

    $db.pg_close();
?>