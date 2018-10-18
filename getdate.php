<?php

    
if(isset($_GET["datesubmit"])&&isset($_GET["caldate"])){
    $date= $_GET["caldate"];
    $datevalue= strtotime($date);
}else{
     if(isset($_GET["prev-week"])){
        $date = $_GET["lastweek"];
        $datevalue=strtotime('-1 week',strtotime($date));
    }
    if(isset($_GET["next-week"])){
        $date = $_GET["nextweek"];
        $datevalue= strtotime('+1 week',strtotime($date)); 
    }else{
        if(!isset($_GET["prev-week"])&&!isset($_GET["next-week"])&&!isset($_GET["submit"])||isset($_GET["reset"])){
            $date=date('d-m-Y');
            $datevalue= strtotime($date);
        }
    }
}
 
   
$newdate=date('d-m-Y',$datevalue);
$weekday= array();
$weekdaylabel = array(0,"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday", "Sunday");
$week= date('W',$datevalue);
$year= date('Y',$datevalue);
$month = date('m',$datevalue);

for($day=1;$day<=7;$day++){
    $weekday[$day]= date('d', strtotime($year."W".$week.$day));
}
        


