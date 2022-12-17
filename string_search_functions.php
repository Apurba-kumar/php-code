<?php

$a = "hello world. The world is beautiful";

echo strstr($a,"world")."<br>";//search string and return remaining string  value 
echo strstr($a,"world",true)."<br>";//we can use third parameter before search which return before search value of string
echo stristr($a,"World")."<br>";//case insensitive

echo strchr($a,"world",true)."<br>";//same as strstr
echo strrchr($a,"world")."<br>";//we can't use third parameter

echo strpbrk($a, "e")."<br>";//search character in string then return remaining string value...we can search multiple character together . 

echo strpbrk($a, "or"); //first find o then return remaining string
?>