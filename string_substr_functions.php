<?php
$a = "hello world. The world is beautiful";

echo substr($a,6)."<br>";//create sub string from position six
echo substr($a, -2)."<br>";//create sub string from last two string character beacause we give here negative 
echo substr($a,0,10);//create a sub string from o to 10 position
echo substr($a, 10,-1);//create substring 10 to -1 position

?>