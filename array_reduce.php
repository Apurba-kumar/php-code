<?php
function myFunction($n, $m){
    return $n . "-". $m; //here we can do addition ,multification so on.
    //for multification we need pass third parameter as 1. cause inital they pass 0.
}
// $a = ["orange","banana","apple"];

$a = [10,20,30];

$newArray=array_reduce($a, 'myFunction','lemon');//third parameter for initial value..it add first postion then other value add continuously.

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>