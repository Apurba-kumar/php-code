<?php

// this for index array with array replace
// $fruit =['orange', 'banana', 'apple',1=>'grapes'];

// $veggie = ['carrot', 'pea'];

// $color = ['red','green','blue'];

// $newArray=array_replace($fruit, $veggie,$color);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";



// //for associative array with array replace

// $fruit =['orange', 'a'=>'banana', 'apple',1=>'grapes'];

// $veggie = ['a'=> 'carrot', 1 =>'pea'];

// $newArray=array_replace($fruit, $veggie);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


//for array replace recursive

$array1 = array(
   array( 'a'=>'red'),
    array( 'b'=>'green','pink')
);

$array2 = array(
    array('a'=>'yellow'),
    array('b'=>'black')
);

$newArray=array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>