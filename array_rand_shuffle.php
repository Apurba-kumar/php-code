<?php

//this for taking random value from array
$a = ["Red","Green","Blue","Orange","Brown"];
// $a = [
//     "a" => "red",
//     "b" => "green",
//     "c" => "blue",
//     "d" => "yellow"
// ];

// $arr = array_rand($a, 2);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// echo $a[$arr[0]] . "<br>";
// echo $a[$arr[1]];

//for shuffle a array

shuffle($a);
echo "<pre>";
print_r($a);
echo "</pre>";

?>