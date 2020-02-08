<?php
function db_connect() {
  static $connection;
  if (!isset($connection)) {
    $config = parse_ini_file(__DIR__ . '/../private/config.ini');
    $connection = pg_connect("host=".$config['host']." dbname=".$config['dbname']." user=".$config['user']." password=".$config['password']);
  }

  return $connection;
}

$db = db_connect();
?>