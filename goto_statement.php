<?php
for($i=0; $i<10;$i++){
    if($i==5){
        goto abc;//go to the label and skip the midle code
    }
    echo $i."<br>";
}
echo "hello";
abc:  //this label 
echo "this is label abc";
?>