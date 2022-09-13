<?php

$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "contactdb";

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

?>