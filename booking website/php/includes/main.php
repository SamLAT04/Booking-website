<?php
$host = "HOST";
$dbUsername = "USERNAME";
$dbPassword = "PASSWORD";
$dbname = "DB_NAME";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
?>