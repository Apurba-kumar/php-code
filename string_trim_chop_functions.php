<?php

$a ="Hello world PHP";
echo $a."<br>";
echo trim($a,"HeP")."<br>";//find given characters first position  and last position continuously if found then remove it.
echo rtrim($a,"HP")."<br>";//trim in right side position
echo ltrim($a,"HP")."<br>";//trim left side position 

//most of the time we used trim for form 
$b = "  Apurba Kumar  ";//here have space first and last position
echo $b."<br>";
echo trim($b)."<br>";//remove the space at first position and last position

echo chop($a,"HP");//act like a rtrim
?>