<?php
$a = "hello World";

$arr = strtoupper($a);//convert lower to upper
$arr1 = strtolower($a);//convert upper to lower
$arr2 = ucfirst($a);//convert first character lower to upper
$arr3 = lcfirst($a);//convert first character upper to lower
$arr4 = ucwords($a);//convert every words character lower to upper

echo $arr."<br>";
echo $arr1."<br>";
echo $arr2."<br>";
echo $arr3."<br>";
echo $arr4."<br>";
?>