<?php 
require"config.php";
if(!isset($_SESSION["current_user"])){
    header("location:logout.php");
}
require"getdate.php";
require"getappointments.php";

?>
<head>
<title>Dborndev - Calendar</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<header class="header">
    <div class="welcomer">
        <?php
            echo"Welcome, ". $_SESSION["current_user"];
        ?>
    </div>
    <div class="headerbuttons">
        <form>
            <button name="logout" formaction="logout.php">Log Out</button>
            <button name="edit" formaction="edit.php">Edit Account</button>
        </form>
    </div>
</header>
<body>
<table class="calendar">
    <tr class="calmonth">
        <td colspan="7">
            <h3 class=monthname>
                <?php echo $month. " - ". $year; ?>
            </h3>
        </td>
    </tr>
    <tr>
        <td rowspan="1" class="tablebutton">
            <div class="buttoncontainer left">
                <form action method="get">
                    <input type="hidden" name=lastweek value="<?php echo $newdate; ?>">
                        <input type="submit" value="<" name="prev-week">
                </form>
            </div>
        </td>
        <td colspan="5">
            <?php echo"Week: " .$week  ?>
        </td>
        <td rowspan="1" class="tablebutton">
            <div class="buttoncontainer right">
                <form action method="get">
                    <input type="hidden" name=nextweek value="<?php echo $newdate; ?>">
                    <input type="submit" value=">" name="next-week">
                </form>
            </div>
        </td>
    </tr>
    <tr class="daydate">
        
     <?php
        for($i=1;$i<=7;$i++){
            echo"<td><b>".$weekdaylabel[$i]."</b><br>".$weekday[$i]."</td>";
        }
        ?>
    </tr>
    <tr class="daycontent">
    <?php
      for($i=1;$i<=7;$i++){
        if($weekday[$i]==date('d',strtotime($appdate))&&$month==date('m',strtotime($appdate))&&$year==date('Y',strtotime($appdate))){
                echo"<td><form action='editappointment.php' method='post'><textarea name='appcontent'>".$appcontent."</textarea><input type='hidden' name='appdate' value='".$year."-".$month."-".$weekday[$i]."'><input type='hidden' name='appid' value='".$appid."'><input type='submit' value='save' class='smallbutton'></form></td>";
            }else{
                echo"<td><form action='insertappointment.php' method='post'><textarea name='appcontent'></textarea><input type='hidden' name='appdate' value='".$year."-".$month."-".$weekday[$i]."'><input type='submit' value='save' class='smallbutton'></form></td>";
            }
        }
        ?>
    </tr>
    <tr>
        <td colspan="7">
            <form action method="get">
                <input type="date"  class="calbutton" name="caldate" >
                <input type="submit" class="calbutton" name="datesubmit" value="Go to Date" >
                <input type="submit" class="calbutton" name="reset" value="Today" >
            </form>    
        </td>
    </tr>
</table>
</body>

