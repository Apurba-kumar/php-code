<?php
$arr = array(
    "hello"=>25, 
    "hi"=>30,
    "bye"=>40
       );

 echo"<ul>";
foreach($arr as $key => $value){
    echo "<li> $key = $value</li>";
   
}
echo "</ul>";

?>