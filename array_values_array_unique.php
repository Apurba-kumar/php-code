<?php

$color = ["a"=>"red","b"=>"green","c"=>"red","d"=>"yellow"];

//$newarray = array_values($color);//to convert assoicattive array to index array

$newarray = array_unique($color);// to create a new array where value is unique no repeataion
echo "<pre>";
print_r($newarray);
echo "</pre>";


?>