<?php


$current_id=$_SESSION["current_id"];

$query= "SELECT * FROM appointments WHERE u_ID='$current_id'";

$appointments=$conn->query($query);

while($row=$appointments->fetch_assoc()){
    $appdate=$row["app_date"];
    $appcontent=$row["app_content"];
    $appid=$row["app_id"];
}