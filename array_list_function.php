<?php

// $arr = ['red','green','blue'];
// //$arr = [10,20,30];
// //list($a,$b,$c)=$arr;//asign value 0,1,2 index

// //list($a,,$c)=$arr;//now asign 0 and 1 value from thek array 
// list(,,$c)=$arr;//asign just index 2 value in $c

// //echo "Value of a : $a<br>";
// // echo "Value of b : $b<br>";
// echo "Value of c : $c<br>";



//list works on numerical index array
$arr1 = [
    0=>'red',
    //'a'=>'green', not working because it is not numerical key
    1=>'green',
    2=>'blue'
];
//list($a,$b,$c)=$arr1;

//we can assign array value in one array
list($a[0],$a[1],$a[2])=$arr1;

echo"<pre>";
print_r($a);
echo"</pre>";

?>