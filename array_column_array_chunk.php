<?php
/*$arr = array(
    array(
        'id'=>2201,
        'first-name'=>'Anil',
        'last-name'=>'kapoor'
    ),
    array(
        'id'=>2202,
        'first-name'=>'Raihan',
        'last-name'=>'Karim'
    ),
    array(
        'id'=>2203,
        'first-name'=>'Tanim',
        'last-name'=>'safwan'
    )
);

//$newArray = array_column($arr,'last-name');//create a index array with all last-name

$newArray = array_column($arr,'last-name','id');//create a assiocative array with all last-name
echo"<pre>";
print_r($newArray);
echo "</pre>";
*/
$cars = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel","corola"];

$age = array(
    "mohan"=>35,
    "Aman"=>37,
    "Raman"=> 43,
    "rahim"=>25
);
//$newArray = array_chunk($cars,2);//to create  a new assoicative array from index array and create by user difined size

$newArray = array_chunk($age,3,true);
echo"<pre>";
print_r($newArray);
echo "</pre>";
?>