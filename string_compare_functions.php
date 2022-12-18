<?php

//if value match then return zero
//if string 1 is greater then string 2 then return positive value
//if string 1 is less than string 2 then return negative value
//if string 1 and string 2 doesn't match then return begative value

// $a ="Hello world ";
// $b = "Hello world hello";

// //case sensitive and for strcmp
// echo strcmp($a,$b)."<br>";
// echo strncmp($a,$b,6)."<br>";//strncmp use for length parameter



// //case insensitive

// $a = "HELLO world";
// $b = "hello world";

// echo strcasecmp($a,$b)."<br>";
// echo strncasecmp($a,$b,6);//strncasecmp used for given length of string



// $a = "2hello world";
// $b = "10hello world";

// echo strnatcmp($a,$b);//10 is greater than 2 that why return negative value

//echo strnatcasecmp("2hello world","2hello WORLD");//its return 0 for case insensitive

//echo substr_compare("hello world!","world!",0,3,true);//compare 0 to 3 postion string with second string 0 to 3 position and last parameter true means case insensitive

echo similar_text("hello world","hello world",$per)."<br>";//return how many number character match
echo $per."%";
?>