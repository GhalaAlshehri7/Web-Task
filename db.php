<?php

$host = "sql104.infinityfree.com";
$username = "if0_42442058";
$password = "YOUR_DATABASE_PASSWORD";
$database = "if0_42442058_webtask";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
