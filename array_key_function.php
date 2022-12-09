<?php
$arr = ["first"=>"red",
"second"=>"blue",
"third"=>"green",
"fourth"=>"yellow"];

//$newarray=array_keys($arr);  //to view the array key

//$newarray=array_key_first($arr); //to check first key

//$newarray=array_key_last($arr);  // to check last key

// $newarray=array_key_exists("fourth",$arr); // to search  key , is key avaiable then return 1 otherwise its return null;
//alternative way to write array_key_exists
$newarray=key_exists("first",$arr);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>"

if($newarray){
    echo "key exists!";
}
else {
    echo "key doesn't exists!";
}
?>