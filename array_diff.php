<?php

function compare($a, $b){
    if($a===$b){
        return 0;
    }
    return ($a>$b) ? 1 : -1;

}

function compareValue($a, $b){
    if($a===$b){
        return 0;
    }
    return ($a>$b) ? 1 : -1;

}
$arr = ["a"=>"sanjay","b"=>"aman","c"=>"mohan","d"=>"tanim"];
$arr1 = ["a"=>"sanjay","f"=>"aman","d"=>"raihan"];
$arr2 = ["a"=>"sanjay","b"=>"fahim","h"=>"tanim"];

//diff function find the uncommon value and key and it is  case sensitive 
//$newarray = array_diff($arr,$arr1,$arr2);//find the uncommon value 

//$newarray = array_diff_key($arr,$arr1,$arr2);//find the uncommon key value

//$newarray = array_diff_assoc($arr,$arr1,$arr2);//find uncommon value and key and return from the first array value and key

// $newarray = array_diff_uassoc($arr,$arr1,"compare");//uncommon value and key

//$newarray = array_udiff_assoc($arr,$arr1,"compare");//same as previous

// $newarray = array_diff_ukey($arr,$arr1,"compare");//for uncommon key

//$newarray = array_udiff($arr,$arr1,"compare");//for uncommon value

$newarray = array_udiff_uassoc($arr,$arr1,"compare","compareValue");//uncommon value and key

echo "<pre>";
print_r($newarray);
echo "</pre>"
?>