<?php

$a = "hello world";
$b = bin2hex($a);//convert all ASCII character to hexadecimal randomly

echo $b."<br>";

echo hex2bin($b);//decode hexadecimal to ASCII
?>