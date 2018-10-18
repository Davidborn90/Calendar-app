<?php 
require "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $loginemail = $_POST["loginemail"];
    $loginpassword = $_POST["loginpassword"];
    
    if (preg_match("~^(?!*?[-_^?}{\]\[/'*&#])~ ", $loginemail) ){
    header("location:index.php?err=1"); 
} 
else{
    
    $loginpassword=md5($loginpassword);
    
    $query = "SELECT u_name, u_ID FROM users where u_email='$loginemail' AND u_pass='$loginpassword'";
    
    $result = $conn->query($query);
    
    if($result->num_rows==1){
        $data=mysqli_fetch_object($result);
        $current_id=$data->u_ID;
        $current_user=$data->u_name;
        $_SESSION["current_user"]=$current_user;
        $_SESSION["current_id"]=$current_id;
        header("location:show.php");
    }
    else{
        header("location:index.php?err=2");
    }
}
    
   
}