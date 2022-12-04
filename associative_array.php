<?php
// $a = array(
//     "bill"=>10,
//     "joe"=>20,
//     "peter"=>30
// );

//we can also declear associative array like this:
$a = [
    "1"=>"10",
    "joe"=>20.5,
    "peter"=>30
];
$a["peter"] = 35;
echo "<pre>";
print_r($a)."<br>";
var_dump($a);
echo"</pre>";
 echo $a[1]."<br>";
 echo $a["joe"]."<br>";
 echo $a["peter"]."<br>";

?>