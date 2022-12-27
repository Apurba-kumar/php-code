<?php
//  function factorial($num){
//     if($num==0){
//         return -1;
//     }
//     if($num==1){
//         return 1;
//     }
//     echo $num."<br>";
//     return $num * factorial($num-1);
//  }
//   factorial(6);

// //  function display($number){
// //     if($number<=5){
// //         echo "$number<br>";
// //         display($number + 1);
// //     }
// //  }
// //  display(4);




function factorial($num){
    if($num==0){
        return 0;
    }
    elseif($num==1){
        return 1;
    }
    else
    return factorial($num-1) + factorial($num-2);
}
echo factorial(4);
 ?>