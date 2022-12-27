<?php
function sortedarray(){
$a = [1,3,5,6,4,2];
      
        $b =[sizeof($a)];
        $r = sizeof($a)-1;
        $l = 0;
       for($i = 0; $i < sizeof($a)/2; $i++){
        $b[$l++] = $a[$i];
        $b[$l++] = $a[$r--];
       }
       
       $c = sort($b);
       if($c == $b)
       return true;
       else
       return false;

    }
echo sortedarray();
?>