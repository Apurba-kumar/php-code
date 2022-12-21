<?php
$val = max(20,30,10,9);
$val1 = min(20,30,10,9);
echo $val."<br>";
echo $val1."<br>";

$a = [20,30,10,9];
$b = [20,30,11,10];
echo max($a)."<br>";
echo min($a)."<br>";

$temp = max($a,$b);//compare both array its always returns bigger array
echo "<pre>";
print_r($temp);
echo "</pre>";

$temp1 = min($a,$b);//compare both array its always returns lower array
echo "<pre>";
print_r($temp1);
echo "</pre>";


//for boolean value
$x = max(true,false);//here true means 1 and false means 0
echo $x;