<?php
// $a = ["a","b","c","d","e"];

// $arr = array_fill_keys($a,"Testing");//convert index array to associative array and value become key and putting value through this array_fill_keys function

// echo "<pre>";
// print_r($arr);
// echo "</pre>"



//array_fill function

$arr = array_fill(-3,4,"Testing");//to create a where value is same for all the index...here first parameter for start index number then stop then the default value
echo "<pre>";
print_r($arr);
echo "</pre>"

?>