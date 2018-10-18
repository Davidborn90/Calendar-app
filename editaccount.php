<?php
require"config.php";

$current_id=$_SESSION["current_id"];
$query="SELECT u_name, u_email FROM users where u_id='$current_id'";

$result=$conn->query($query);


while($row=$result->fetch_assoc()){
    $name=$row["u_name"];
    $email=$row["u_email"];
}
?>


<head>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<div class="container">
    <div>
        <div>
            <table>
                <form method="post">
                    <tr><td><span>Name: </span></td><td><input type="text" name="name" value="<?php echo"$name"; ?>" required></td></tr>
                    <tr><td><span>Email: </span></td><td><input type="text" name="email" value="<?php echo"$email"; ?>" required></td></tr>
                    <tr><td><span>Password: </span></td><td><input type="password" name="password" ></td></tr>
                    <tr><td><span>Repeat Password: </span></td><td><input type="password" name="passwordcheck"></td></tr>
                    <tr><td><input type="submit" name="submit" value="Accept" formaction="edit.php"></td></tr>
                </form>
            </table>
        </div>
    </div>
</div>

</body>

