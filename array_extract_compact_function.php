<?php
// //extract function used for convert key to variable

// /*$a = "orange";
// $color = [
//     "a"=>"red",
//     "b"=>"green",
//     "c"=>"blue"
// ];

// extract($color);

// echo "value of a: $a <br>";
// echo "value of b: $b <br>";
// echo "value of c: $c <br>";*/

// $a = 'orange';
// $color = [
//     'a'=>'red',
//     'b'=>'green',
//     'c'=>'blue'
// ];

// //extract($color, EXTR_OVERWRITE);//second parameter it is a by default parameter ...it do nothing

// //extract($color,EXTR_SKIP);//this parameter skip the array variable and print out variable value

// //extract($color, EXTR_PREFIX_SAME, "test");//if we want to print variable array varibale and normal variable 
// //third parameter used for prefix for array varibale name  like $test_a

// extract($color, EXTR_PREFIX_ALL,"test");//we have to declear all key variable with prefix name like $test_a, $test_b,$test_c 

// echo "value of a: $a <br>";
// echo "value of a: $test_a <br>";
// echo "value of b: $test_b <br>";
// echo "value of c: $test_c <br>";


$firstname = "tanim";
$lastname = "safwan";
$age = "25";
$gender = "male";
$country = "Bangladesh";

$extra = ["gender","country"];

$newarray = compact("firstname","lastname","age",$extra);//used normal variable and value  convert to a associative array

echo "<pre>";
print_r($newarray);
echo "</pre>";

?>