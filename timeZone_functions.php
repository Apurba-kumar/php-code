<?php
// date_default_timezone_set("Asia/Dhaka");
// echo date_default_timezone_get()."<br>";

// $timeZone = timezone_open("Asia/Dhaka");
// echo timezone_name_get($timeZone)."<br>";

// echo "<pre>";
// print_r (timezone_location_get($timeZone));
// echo "</pre>";


echo "<pre>";
print_r(timezone_identifiers_list());//to get all timezone and we can pass country code as parameter like 1..2...3 
echo "</pre>";
?>