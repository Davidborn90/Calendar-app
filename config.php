<?php
session_start();

$servername ="rdbms.strato.de";
$username ="U3531062";
$dbname = "DB3531062";
$password = "databasepass";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("ERROR: ".$conn->errno.". Verbinding mislukt,". $conn->error);
}
?>
