#!/usr/bin/php

<?php
function query($argument)
{
    set_include_path(__DIR__ . '/../../includes/phpseclib');
    include "Net/SSH2.php";

    include "Crypt/RSA.php";
    $key = new Crypt_RSA();
    $key->loadKey(file_get_contents(__DIR__ . '/../../private/private-key.ppk'));

    $ssh = new Net_SSH2('35.230.137.200', 22); // Domain or IP

    if (!$ssh->login('kf619', $key)) {
        exit('Login Failed');
    }

    $command = "python3 /home/sitorusezra/googlecloud/natlang/natlang.py ";
    $nlp = $ssh->exec($command . $argument);
    return $nlp;
}
?>
