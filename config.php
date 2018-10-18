<?php
session_start();

$servername ="***";
$username ="***";
$dbname = "***";
$password = "***";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("ERROR: ".$conn->errno.". Verbinding mislukt,". $conn->error);
}
?>
