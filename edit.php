<?php
require "config.php";

if(isset($_POST["submit"])&&$_POST["password"]==$_POST["passwordcheck"]){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $current_id=$_SESSION["current_id"];

    if($_POST["password"]==""&&$_POST["passwordcheck"]==""){


        $query="UPDATE users SET u_name='$name', u_email='$email' WHERE u_ID='$current_id'";
    }else{


        $query="UPDATE users SET u_name='$name', u_email='$email', u_pass='$password' WHERE u_ID='$current_id'";
    }

    if($conn->query($query)){
        $_SESSION["current_user"]=$name;
        header("Location: show.php");
    }else{echo $conn->errno." :". $conn->error; echo"<br>".$query;}
}
else{
    header("Location: editaccount.php");
    $_SESSION["passerror"]="passwords dont match";
}
?>

