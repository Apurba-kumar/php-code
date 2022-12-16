<?php
$a = "Hello World";

echo strlen($a)."<br>";
echo str_word_count($a)."<br>";//here we can count the number of words
echo str_word_count($a,0)."<br>";//second parameter default 0 
$arr = str_word_count($a,1);//second parameter when we put one ..it converted string to array
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr1 = str_word_count($a,2);//when put 2 as a second parameter it also converted string to array but index position start with character postition in words.
echo "<pre>";
print_r($arr1);
echo "</pre>";

$b = "Hello world. The world is beautiful!";
echo substr_count($b, "world")."<br>";//to search word in string and its a case sentitive function
echo substr_count($b, "world",10)."<br>";//it also doing search but start at string position 10 that's why its return 1
echo substr_count($b, "world",10,15)."<br>";//search string postion 10 t0 15 
?>