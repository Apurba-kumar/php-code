<?php
//to check given date valid or not
//if given date is valid then return 1 otherwise 0

echo checkdate(2,15,2014)."<br><br>";//return 1 because it's a valid date

// //for date difference

// $date1 = date_create("2013-03-15");

// $date2 = date_create("2013-12-12");

// $diff = date_diff($date1,$date2);

// echo $diff->days. "days";

// echo "<pre>";
// print_r($diff);
// echo "</pre>";

//if date difference got negative value
$date1 = date_create("2013-12-15");

$date2 = date_create("2013-03-12");

$diff = date_diff($date1,$date2);

echo $diff->format("%r%a days");
?>