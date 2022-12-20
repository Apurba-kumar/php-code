<?php

$a = "Hello world!";
echo $a."<br>";
$b = convert_uuencode($a);//encrypt data 
echo $b."<br>";
echo convert_uudecode($b);//decrypt data
?>