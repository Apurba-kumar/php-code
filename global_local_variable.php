 <?php

// function test(){
//     $x = 10;//local variable 
//     echo "variable X inside the function: $x<br>";
// }
// test();
// echo "variable outside of the function: $x";//we got error here because if $x declear inside function



// $x = 10;//global variable
// function test(){
    
//     echo "variable X inside the function: $x<br>";//we got error here because if $x declear outside function
// }
// test();
// echo "variable outside of the function: $x";



//for resolve above proble we use global and local variable

// $x = 10;
// $y = 5;
// function test(){
//     global $x,$y;
//     $x +=$y;
// }
// test();
// echo  $x;

//static keyword-> use the static keyword when you first declare the variable
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest();
?>   
