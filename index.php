<head>
    <title>DbornDev - Calendar | Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <div class="container main" id="login">
        <div class ="container title">
            <h4>Log in to your Calendar account</h4>
        </div>
        <div class="container logincontent">
            <form action="login.php" method="post">
                <table>
                    <tr><td>Email:</td></tr>
                    <tr>
                        <td>
                            <input type="email" name="loginemail">
                        </td>
                    </tr>
                    <tr><td>Password:</td></tr>
                    <tr>
                        <td>
                            <input type="password" name="loginpassword">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="loginsubmit" value="Log In">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" id="registerlink">Register new Account</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="container main" id="register">
        <div class ="container title">
            <h4>Register a new account</h4>
        </div>
        <div class="container logincontent">
            <form action="register.php" method="post">
                <table>
                    <tr><td>Email:</td></tr>
                    <tr>
                        <td>
                            <input type="email" name="loginemail">
                        </td>
                    </tr>
                    <tr><td>Name:</td></tr>
                    <tr>
                        <td>
                            <input type="text" name="loginname">
                        </td>
                    </tr>
                    <tr><td>Password:</td></tr>
                    <tr>
                        <td>
                            <input type="password" name="loginpassword">
                        </td>
                    </tr>
                    <tr><td>Repeat password:</td></tr>
                    <tr>
                        <td>
                            <input type="password" name="loginpasswordcheck">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="loginsubmit" value="Register">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" id="loginlink">Login with existing account</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="whathappened"><?php
        if($_GET["err"]=="1"){
            echo"<p class='error'>Foreign characters detected, Please use alfanumeric characters without spaces and try again!</p>";
        }
        if($_GET["err"]=="2"){
            echo"<p class='error'>Invalid username and password combination, Please try again!</p>";
        }
        if($_GET["err"]=="3"){
            echo"<p class='error'>These passwords do not match, Please try again!</p>";
        }
        if($_GET["err"]=="4"){
            echo"<p class='success'>Your account has been created!</p>";
        }
        ?>
    </div>
</body>
<script type="text/javascript">
    
    $(document).ready(function(){
        $("#register").hide();
    });
    $("a#registerlink").click(function(){
        $("#login").hide(120);
        $("#register").show(40);
      });
    $("a#loginlink").click(function(){
        $("#register").hide(120);
        $("#login").show(40);
      });
</script>