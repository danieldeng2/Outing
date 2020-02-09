#!/usr/bin/php
<?php
  include "../../includes/dbconnect.php";

  $content = pg_escape_string($db, filter_var($_POST["message"], FILTER_SANITIZE_STRING));
  $writer = $_COOKIE["userid"];
  $groupid = $_POST["groupid"];

  $query = "INSERT INTO messages (content, writer, groupid) VALUES ('$content','$writer','$groupid')";
  $result = pg_query($db, $query);

  if (!($result)) {
    echo "Error in saving the message to the database!";
  }

?>


