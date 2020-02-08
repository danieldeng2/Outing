#!/usr/bin/php

<?php
@ob_end_clean();
include "../../includes/dbconnect.php";

$username = pg_escape_string($db, filter_var($_POST["signInUserName"], FILTER_SANITIZE_STRING));
$password = pg_escape_string($db, filter_var($_POST["signInPassword"], FILTER_SANITIZE_STRING));
$password_encrypt = md5($password);
$valid = true;

if (((empty($username) == true) || (empty($password)) == true)) {
    array_push($errors, "Required fields not written!");
    $valid = false;
}

$user_check_query = "SELECT password, userid FROM users WHERE username = '$username' LIMIT 1";
$result = pg_query($db, $user_check_query);
if (!$result) {
  echo "Wrong username or password!!";
  $valid = false;
}
$arr = pg_fetch_array($result, NULL, PGSQL_ASSOC);
if ((count($arr) == 0) || ($arr["password"] != $password_encrypt)) {
  echo "Wrong username or password!";
  $valid = false;
}

if ($valid == true) {
  echo "Logged in successfully";
  $_SESSION['username'] = $username;
  $_SESSION['userid'] = $arr["userid"];
  $_SESSION['success'] = "Logged in successfully";
}
$db . pg_close();
?>