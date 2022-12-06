<?php
// $food = ['orange','banana','apple','grapes','50'];

// echo in_array('apple',$food)."<br>";//out 0 and 1 ,, if find then return 1;

// if(in_array(50,$food, true)){//return can't find because given parameter is integer value but array have string value
//     echo "Find successfully";
// }
// else{
//     echo "can't find";
// }


// $cars = [
//      ["Volvo",22,18],
//      ["BMW",15,13],
//      ["Saab",5,2],
//      ["Land Rover",17,15]
// ];
// if(in_array(["Volvo",22,18],$cars)){//here we can search all element of single index of mulitidimensional array
//     echo "sucess";
// }
// else {
//     echo "failed";
// }

$food = ['orange','banana','apple','grapes','50'];
// echo array_search('apple',$food)."<br>";// return index number of array
$food1 = [
    "o"=>"orange",
    "b"=>"banana",
    "a"=>"apple",
    "g"=>"grapes",
    "n"=>50
];

echo array_search("banana",$food1);// for assiocative array here return the key name
?>