<?php

function compare($x,$y){
    if($x === $y){
       return 0;
    }
    return ($x>$y)? 1 : -1;
}

function compareValue($x,$y){
    if($x === $y){
       return 0;
    }
    return ($x>$y)? 1 : -1;
}

$a = ["a"=>"sanjay","b"=>"rahul","c"=>"karim","d"=>"rahim"];
$b = ["a"=>"sanjay","e"=>"rahul","c"=>"mohan"];
$c = ["a"=>"sanjay","b"=>"rohit","h"=>"rahim"];

//$newarray=array_intersect($a,$b,$c);//find the matching value and ots case sensitive

// $newarray=array_intersect_key($a,$b);//find the matching key and return first array value

//$newarray=array_intersect_assoc($a,$b);//find matching key and value

//$newarray=array_intersect_uassoc($a,$b, "compare");//find matching value and key through a function which is user defined
//$newarray=array_uintersect_assoc($a,$b,"compare"); //another way like previous one

//$newarray=array_intersect_uassoc($a,$b,"strcasecmp");//to find matching value and key through strcasecmp function and its a case sensitive 

//$newarray=array_intersect_ukey($a,$b,"compare");//find matching key and return value from first array

//$newarray=array_uintersect($a,$b,"compare");//find matching value

$newarray=array_uintersect_uassoc($a,$b,"compare","compareValue");
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>