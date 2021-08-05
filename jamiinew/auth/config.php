<?php

$server = "remotemysql.com";
$user = "root";
$pass = "";
$database = "collabdb";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
