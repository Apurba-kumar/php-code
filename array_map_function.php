<?php
// function square($n,$m){
//     return [$n => $m];
// }
// $a = [1,2,3,4,5];
// $b = ['lemon','orange','banana','apple','guava'];
// //$newArray= array_map('square',$a,$b);//join two array and create a multidimensional array
// $newArray= array_map(null,$a,$b);//used two array and create a multidimensonal associative array
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";



//previously we used index array ...but here we used associative array
function square($n){
 return strtoupper($n);
}
$a = [
    "one"=>"apple",
    "two"=>"banana",
    "three"=>"ornage"
];

$newArray = array_map("square",$a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>