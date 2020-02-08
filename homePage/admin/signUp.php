#!/usr/bin/php
<?php
@ob_end_clean();
include "../../includes/dbconnect.php";

$username = pg_escape_string($db, filter_var($_POST["singUpUserName"], FILTER_SANITIZE_STRING));
$password = pg_escape_string($db, filter_var($_POST["singUpPassword"], FILTER_SANITIZE_STRING));
$email = pg_escape_string($db, filter_var($_POST["signUpEmail"], FILTER_SANITIZE_STRING));
$bank_account = pg_escape_string($db, filter_var($_POST["signUpBankAccount"], FILTER_SANITIZE_STRING));
$sord_code = pg_escape_string($db, filter_var($_POST["signUpSortCode"], FILTER_SANITIZE_STRING));
$payment_addr = pg_escape_string($db, filter_var($_POST["signUpPayment"], FILTER_SANITIZE_STRING));
$errors = array();
$valid = true;

if ((empty($username) || empty($password)) == true) {
    array_push($errors, "Required fields not implemented!");
    $valid = false;
}

if ((!empty(email)) && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
    array_push($errors, "Invalid email address");
    $valid = false;
}

$user_check_query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
$result = pg_query($db, $user_check_query);
$user = pg_fetch_assoc($result);

if ($user) {
    array_push($errors, "Username already used!");
}

if (count($errors) == 0) {
    $encrypt_assword = md5($password);
    $save_query = "INSERT INTO users (";
    if (!empty($email)) {
        $save_query = $save_query . "email";
    }
    if (!empty($email)) {
        $save_query = $save_query . "email";
    }
    if (!empty($email)) {
        $save_query = $save_query . "email";
    }
    if (!empty($email)) {
        $save_query = $save_query . "email";
    }
}

$db . pg_close();
?>