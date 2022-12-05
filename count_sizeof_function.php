<?php
$food = ["orange","banana","apple"];

echo count($food);
echo"<br>";
echo sizeof($food)."<br>";

$food1 = [
   "fruits"=> ["orange","banana","apple"],
   "veggle"=> ["carrot","collard", "pea"]
];
echo count($food1,1)."<br>";//output ->8
/*to find out array inter array size we used mod parameter default mod value 0
we don't need to declear this , when we came up with one its shows the size of 
totall array*/ 

//to find the size of internal array size

// echo count($food1['fruits'],1);
echo sizeof($food1['fruits'],1)."<br>";

$food2 = array('orange','banana','apple','banana','grapes');

// for($i=0; $i<sizeof($food2);$i++)
// {
//     echo $food2[$i]."<br>";
// }

//another way of count array value

echo "<pre>";
print_r( array_count_values($food2));
echo "</pre>";
?>