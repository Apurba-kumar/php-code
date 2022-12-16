<?php

$a = "hello world";
$arr = str_split($a,2);//make single character from string

$arr1 = chunk_split($a,2,".");//it also works like str_split but add some extra value in it.
echo "<pre>";
print_r($arr1);
echo "</pre>";
?>