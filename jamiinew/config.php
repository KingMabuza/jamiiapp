<?php

$server = "remotemysql.com";
$user = "ZGhQrry6A6";
$pass = "qirpot2x51";
$database = "ZGhQrry6A6";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
