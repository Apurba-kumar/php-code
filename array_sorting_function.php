<?php
$a = ["tanim","apurba","karim","safwan"];
$c = ["anim","apu","rahim","Fafwan"];
$b = [10,2,59,4,3];
$arr = [
    "w"=>"hello",
    "e"=>"bye",
    "x"=>"tata",
    "s"=>"world"
];

//sort($a);//used sort by alphabet and less number to greater
//sort($b);//used for index array 
//rsort($b);//work as a just oppposite of sort...reverse sort and used for index array

//arsort($arr);//used for associative array and reverse sort
//asort($arr);//used for associative array and sort with value

//sort with key
//ksort($arr);//sort by key
//krsort($arr);//reverse key sort

//$arr1 = ["img12.png","img10.png","img2.png","img1.png"];
//natsort($arr1);//used for same name but last character different

//$arr1 = ["img12.png","img10.png","img2.png","img1.png"];
//natcasesort($arr1);//natural case sort..used for case sensitive
// echo"<pre>";
// print_r($arr1);
// echo "</pre>";

// array_multisort($a,$c);//multisort works when both array size same otherwise oit will not work.
// echo"<pre>";
// print_r($a);
// echo "</pre>";
// echo"<pre>";
// print_r($c);
// echo "</pre>";


$arr3=array_reverse($a);//array reverse
echo"<pre>";
print_r($arr3);
echo "</pre>";
?>