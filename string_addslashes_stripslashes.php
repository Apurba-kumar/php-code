<?php

$a = 'Hello, I am "Apurba Kumar" I';
echo $a."<br>";
$b =  addslashes($a);//add slashes before the cotation mark
echo $b."<br>";
echo stripslashes($b)."<br>";//remove the slashes

$c = addcslashes($a,"Ia");//add slashes multiple charater 
echo $c."<br>";
echo stripslashes($c)."<br>";

$d = addcslashes($a,"A..Z");//add slashes where capital letter A to Z found
echo $d."<br>";
echo stripcslashes($d)."<br>";
?>