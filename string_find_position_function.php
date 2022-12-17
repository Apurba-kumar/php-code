<?php
$a = "Hello world. The world is beautiful!";
//    0123456789......position

//for strpos, strrpos, stripos, strripos we can pass third parameter from start position
echo strpos($a,"world",10)."<br>";//search string position from front position of string//case sensitive
echo strrpos($a,"world")."<br>";//search string position from last position of string //case sensitive
echo stripos($a,"World")."<br>";//same as previous but its case insensitive
echo strripos($a,"World")."<br>";//case insensitive

?>