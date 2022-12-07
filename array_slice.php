<?php
$arr = ['sanjay','aman','rehman','karim'];

// $arr1= array_slice($arr, 1,3);

//another way slice of array -2 means take last two value
// $arr1= array_slice($arr, -3,3);

//array_slice function have four parameter last parameter default is false 
//if true then return orginal index number from array

// $arr1= array_slice($arr, 1,3,true);//last parameter called preserved parameter

// echo "<pre>";
// print_r($arr1);
// echo "</pre>";


//now for associative array 

$arr = [
    "a"=>"hello",
    "b"=> "red",
    42 => "green",
    "c"=>"yellow"
];

$newarr = array_slice($arr,1,2,true);
echo "<pre>";
print_r($newarr);
echo "</pre>";


?>