<?php
require"config.php";

$current_id=$_SESSION["current_id"];
$appcontent =$_POST["appcontent"];
$appdate = $_POST["appdate"];

$query= "INSERT INTO appointments(u_ID, app_date, app_content)VALUES('$current_id', '$appdate','$appcontent')";

if($conn->query($query)){
    header("location:show.php?caldate=$appdate&datesubmit=go");
}