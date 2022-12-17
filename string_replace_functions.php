<?php
$a = "hello world. The world is beautiful.";

$find = ["hello","world"];
$replace = ["hi","earth"];

$array = ["hello" => "hi","world" => "earth"];

echo str_replace("world","Bangladesh",$a)."<br>";//replace word world to bangladesh and its a case sensitive function
echo str_replace($find,$replace,$a)."<br>";//we can replace as many words we want like this
echo str_ireplace("WORLD","Bangladesh",$a)."<br>";//case insensitive
echo substr_replace($a,"Bangladesh",6,16)."<br>";//replace previous string position 6 to 16 and add new sub string
//we can also use 0 0  for start and end ..it adds word at first position of dtring
echo strtr($a,'o','u')."<br>";//replace single character o to u
echo strtr($a,$array);//we can replace also like this
?>