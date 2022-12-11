<?php
$a = ["Bill"=>10,
"Joe"=>20,
"Peter"=>30];

//$arr = array_flip($a);//it flip the array

$arr = array_change_key_case($a,true);//here we can use CASE_UPPER instead true.  we can also used LOWER_CASE to lower case

echo "<pre>";
print_r($arr);
echo "</pre>";
?>