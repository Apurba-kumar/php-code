<?php

//this is for explode
// $arr = "Hello world. It's a beautiful day!";

// $array = explode(" ", $arr, 4/*here we can use -1,-2 for last value*/);//used for string value to array ,,,here we used space as a separator and third parameter for number of index we want

// echo "<pre>";
// print_r($array);
// echo "</pre>";



//this is for implode

$arr = ["hello","world.","It's","a","beautiful","day!"];


//$array = implode(" ",$arr);
$array = join(" ",$arr);

echo "$array";



?>