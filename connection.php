<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "curd";

$con =mysqli_connect($server, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
}



?>