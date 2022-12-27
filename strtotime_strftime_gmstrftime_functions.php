<?php

date_default_timezone_set("Asia/Dhaka");
echo date("d-m-Y",strtotime("now"))."<br>";

echo date("d-m-Y",strtotime("3 march 2010"))."<br>";
echo date("d-m-Y H:m a",strtotime("+5 hours"))."<br>";
echo date("d-m-Y",strtotime("+1 week"))."<br>";
echo date("d-m-Y H:i:s a",strtotime("+1 week 3 days 7 hours 45 minutes 5 seconds"))."<br>";
echo date("d-m-Y",strtotime("next friday"))."<br>";
echo date("d-m-Y",strtotime("last year"))."<br>";
echo date("D",strtotime("last day of last month"))."<br>";


echo strftime("%B %D %Y, %X %Z")."<br>";

echo strftime("%B %D %Y, %X %Z", mktime(21,30,0,05,18,2005))."<br>";

echo gmstrftime("%B %D %Y, %X %Z")."<br>";

?>