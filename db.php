<?php


DEFINE ('DB_User', '9905010');
DEFINE ('DB_PWORD', '9905010');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'db9905010_accounts');

$dbconnect = mysqli_connect(DB_HOST, DB_User, DB_PWORD, DB_NAME);

if (!$dbconnect) {
    die("No connection");
}

?>

