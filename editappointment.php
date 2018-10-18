<?php
require"config.php";

$current_id=$_SESSION["current_id"];
$appcontent =$_POST["appcontent"];
$appid=$_POST["appid"];
$appdate = $_POST["appdate"];

$query= "UPDATE appointments SET app_content='$appcontent' WHERE app_id='$appid'";

if($conn->query($query)){
    header("location:show.php?caldate=$appdate&datesubmit=go");
}