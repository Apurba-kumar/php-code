<?php
 function factorial($num){
    if($num==0){
        return -1;
    }
    if($num==1){
        return 1;
    }
    return ($num*factorial($num-1));
 }
 echo factorial(5);

//  function display($number){
//     if($number<=5){
//         echo "$number<br>";
//         display($number + 1);
//     }
//  }
//  display(4);
 ?>