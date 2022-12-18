<?php

$a = "hello";
echo str_pad($a,10,".",STR_PAD_BOTH)."<br>";//(string,length,pad_string, pad_type)...pad_type three type STR_PAD_BOTH,STR_PAD_LEFT,STR_PAD_RIGHT
echo str_repeat($a,5);//repeated string 5 times
?>