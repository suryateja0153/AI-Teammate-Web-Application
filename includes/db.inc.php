<?php

session_start();
$dbServername = "34.74.160.228";
$dbUsername = "root";
$dbPassword = "0tfwLCDB75Cadq0I";
$dbName = "aiteammate_usf";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
