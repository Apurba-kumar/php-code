<?php
date_default_timezone_set("Asia/Dhaka");
////getdate(timestamp)

////for current date
// $date = getdate();
// echo $date['month'] . "-". $date['year'];
// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

////for old time

// $olddate = mktime(0,0,0,03,14,2015);
// $date = getdate($olddate);
// echo $date['month'] . "-". $date['year'];
// echo "<pre>";
// print_r(getdate($olddate));
// echo "</pre>";

////gettimeofday(return_float)
// echo "<pre>";
// print_r(gettimeofday());
// echo "</pre>";
// $date = gettimeofday();
// echo $date['sec']."<br>";
// //if we return parameter true then it doesn't return a array
// echo gettimeofday(true);


////localtime(timestamp, is_assoc);

// echo "<pre>";
// print_r(localtime(time(), true));//return local time but month start with 0 and year show 2022 as 122
// echo "</pre>";

//for old time

$olddate = mktime(0,0,0,03,14,2015);

echo "<pre>";
print_r(localtime($olddate, true));
echo "</pre>";
?>