<?php
// function abc(&$c){
//     $c .= " And something added";
  
// }
// $a = "hello world";
// abc($a);
// echo $a

function first($num){
     $num += 5;
}
function second(&$num){
    $num += 5;
}

$num = 10;
first($num);
echo "value for first function is $num<br>";
second($num);
echo "value for second function is $num<br>";
?>