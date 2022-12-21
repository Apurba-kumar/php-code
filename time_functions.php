<?php

//for hour
echo "Hour is : ". date("h")."<br>";//it return hour as 01 to 12
echo "Hour is : ". date("H")."<br>";//it return hour as 00 to 23
echo "Hour is : ". date("g")."<br>";//it return hour as 1 to 12
echo "Hour is : ". date("G")."<br>";//it return hour as 0 to 23


//for minutes
echo "Minutes is : ". date("i")."<br>";

//for second
echo "Seconds is : ". date("s")."<br>";

// for meridiem
echo "Meridiem  is : ". date("a")."<br>";
echo "Hour is : ". date("A")."<br>";

//for full time
echo "Time and timezone is : ". date("h:i:sa e")."<br>";//here e for which timezone
echo "Time and year is : ". date("h:i:s A d-M-y")."<br>";

date_default_timezone_set("Asia/Dhaka");
echo "Time and year is : ". date("h:i:s A  d-M-y")."<br>";
echo "Time, timezone and year is : ". date("h:i:s A e d-M-y")."<br>";//here e for which timezone

?>