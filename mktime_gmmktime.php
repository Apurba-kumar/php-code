<?php

//date(format,timestamp)
//mktime(hour,minute,second,month,day,year)
//gmmktime(hour,minute,second,month,day,year)

date_default_timezone_set("Asia/Dhaka");
echo "Time & Date : ". date("d-m-Y h:i:sa")."<br><br>";

echo date("d-m-Y h:i:sa l",mktime(0,0,0,10,15,2020))."<br>";//to return past time zone
echo date("d-m-Y h:i:sa l",gmmktime(0,0,0,10,15,2020));
?>