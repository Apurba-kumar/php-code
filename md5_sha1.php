<?php

$a = "Hello";
echo "The string is: ".$a."<br><br>";

echo md5($a)."<br>";//use for password hashing in 32 character hexa number formate
echo md5($a,true)."<br><br><br>";//password hashing in 16 character binary formate

echo sha1($a)."<br>";//password hashing in 40 character hexa number formate
echo sha1($a, true)."<br>";
?>