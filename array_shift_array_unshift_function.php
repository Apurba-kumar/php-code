<?php
$arr = ["aman","noman","raihan","tanyem"];

array_shift($arr);//shift remove 0 index value

echo "<pre>";
print_r($arr);
echo "</pre>";

array_unshift($arr,'kumar');//add value before 0 index and itself becoming 0 index
echo "<pre>";
print_r($arr);
echo "</pre>";
?>