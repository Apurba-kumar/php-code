<?php
 
//  $arr = ["apurba", "tanyeem","raihan","kumar"];

//  $arr1 = ["noman", "roman"];

//  $arr2 = ["red","blue"];

//  $arr3 = array_merge($arr, $arr1,$arr2);//array_merge() used for index 
//  echo "<pre>";
//  print_r($arr3);
//  echo "</pre>";



// //for associative array
//  $arr = ['a'=>"apurba", 'b'=>"tanyeem",'c'=>"raihan",'d'=>"kumar"];

//  $arr1 = ['e'=>"noman", 'b'=>"hello", "roman",40];

// //  $arr2 = array_merge($arr, $arr1); used for replace second array value to first array

// $arr2 = $arr+$arr1;//used for merge array but same key value remain first array value

//   echo "<pre>";
//  print_r($arr2);
//  echo "</pre>";



 //used for multidimensional associative array 

//  $arr = ['a'=>"apurba", 'b'=>"tanyeem",'c'=>"raihan",'d'=>"kumar"];

//  $arr1 = ['e'=>"noman", 'b'=>['hello'=> ['red','blue']], "roman",40];

//  $arr2 = array_merge_recursive($arr, $arr1);

//    echo "<pre>";
//  print_r($arr2);
//  echo "</pre>";

 //used for index array
 $arr = ['Ram','mohan','kamol'];

 $arr1 = [35,40,45];

 $arr2 = array_combine($arr, $arr1);//first array 

echo "<pre>";
 print_r($arr2);
 echo "</pre>";

 

?>