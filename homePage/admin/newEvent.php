#!/usr/bin/php

<?php
include __DIR__ . "/../../includes/dbconnect.php";
$name = $_POST["eventName"];
$description = $_POST["eventDescription"];
$members = $_COOKIE["userid"];

if (empty($name) || empty($description)) {
  echo "empty fields, fail to create the group";
  return;
}

$group_check_query = "SELECT * FROM groups WHERE name = '$name' LIMIT 1";
$result = pg_query($db, $group_check_query);
$group = pg_fetch_assoc($result);

if (!$result) {
  echo "problem";
}

if ($group) {
    echo("group name already in use");
    return;
}

$query = "INSERT INTO groups (name, description, status, members) VALUES('$name', '$description', 0, $members)";
$result = pg_query($db, $query);
if (!$result) {
  echo $query;
  echo "db error in creating the group!";
}
?>