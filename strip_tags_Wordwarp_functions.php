<?php

$a = "Hello <b> world </b> Hello <i> earth </i>";
echo "$a"."<br>";

//strip_tags(string,allow)
echo strip_tags($a)."<br>";
echo strip_tags($a,"<i>")."<br>";//remove html tag from string and second parameter for allow tag

//wordwrap(string,width,break,cut)   cut have two value true or false ..false menas no wrap

echo wordwrap($a,4,"<br>",true);// wrap words after 4 character
?>