#!/usr/bin/php

<?php
set_include_path(__DIR__ . '/../../includes/phpseclib');
include "Net/SSH2.php";

### if using PrivateKey ###
include "Crypt/RSA.php";
$key = new Crypt_RSA();
$key->loadKey(file_get_contents(__DIR__ . '/../../private/private-key.ppk'));

$ssh = new Net_SSH2('35.230.137.200', 22); // Domain or IP

if (!$ssh->login('kf619', $key)) {
    exit('Login Failed');
}

echo $ssh->exec('python3 /home/sitorusezra/googlecloud/natlang/natlang.py "hi 10/1/2020"');


?>
