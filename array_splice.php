<?php
/*
//merge to array and find the median
$num1 = [1,2];
$num2 = [3];

$new = array_merge($num1,$num2);
sort($new);
echo "<pre>";
print_r($new);
echo "</pre>";

$count = sizeof($new);   // cache the count
$index = floor($count/2);  // cache the index

if (!$count) {
    echo "no values";
} elseif ($count & 1) {    // count is odd
    echo $new[$index];
} else {                   // count is even
    echo ($new[$index-1] + $new[$index]) / 2;
}
*/



$arr = ['sagor','raihan', 'mukol','riyad', 'sorif'];

$arr1 = ['tipu','shipu'];

// array_splice($arr,2); remove all value except 0,1 index value

// array_splice($arr,1,-2);//format->  array_splice($arr, start, length,$arr1);
//  array_splice($arr,1,2,$arr1);
// array_splice($arr,1,count($arr),$arr1);
// array_splice($arr,2,0,$arr1);

array_splice($arr,count($arr),0,$arr1);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>