<?php
$veggie= [1=>"carrot",2=>"tomatoes"];
$fruits= [
    $veggie,
"a"=>"lemon",
"b"=>"orange",
"c"=>"Banana",
"d"=>"apple"
];

//array_walk($fruits,"myfunction","is key of ");//array_walk used for how many times call a function it depends on the index number

array_walk_recursive($fruits,"myfunction","is a key of ");//used for multidimensional associative array
function myfunction($value,$key,$param){
  echo "$key $param $value"."<br>";
}
?>