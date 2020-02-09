#!/usr/bin/php

<!-- eventName eventDestination eventTime eventDescription -->
<?php
include __DIR__ . "../../includes/dbconnect.php";
$name = $_POST["eventName"];
$description = $_POST["eventDescription"];

if (empty($name) || empty($description)) {
  echo "fail to create the group";
  return;
}

$group_check_query = "SELECT * FROM groups WHERE name = '$name' LIMIT 1";
$result = pg_query($db, $group_check_query);
$group = pg_fetch_assoc($result);

if ($group) {
    echo("group name already in use");
    return;
}

$query = "INSERT INTO groups (name, description, status), VALUES('$name', '$description', 0";
$result = pg_query($db, $query);
if (!$result) {
  echo "db error in creating the group!";
}
?>