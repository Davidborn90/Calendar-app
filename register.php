<?php 
require "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $loginemail = $_POST["loginemail"];
    $loginname = $_POST["loginname"];
    $loginpassword = $_POST["loginpassword"];
    $loginpasswordcheck = $_POST["loginpasswordcheck"];
    
    if (preg_match("~^(?!*?[-_^?}{\]\[/'*&#])~ ", $loginemail) ){
    header("location:index.php?err=1"); 
} 
else{
    if($loginpassword==$loginpasswordcheck){
        $loginpassword=md5($loginpassword);
    
        $query = "INSERT INTO users(u_name, u_email, u_pass)values('$loginname','$loginemail','$loginpassword') ";
    
        if($conn->query($query)){
            header("location:index.php?err=4");
        }
    }
    else{
        header("location:index.php?err=3");
    }
}

}
    
   