<?php
 $a = 10;//we use ternary operator when we have single statement for echo
//  ($a>=18)? $z= "eligible" : $z = "not eligible";
//  echo $z;
// echo $z= ($a>=18)? "eligible" : "not eligible";
// echo $z =   $a>=18 ? "eligible" : "not eligible";
echo $z = "value is: " . ($a>=18 ? "eligible" : "not eligible");


?>