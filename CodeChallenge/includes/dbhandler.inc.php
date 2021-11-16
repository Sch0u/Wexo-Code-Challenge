<?php

// Database connection

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "WexoCC";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}