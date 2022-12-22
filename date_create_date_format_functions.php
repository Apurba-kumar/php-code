<?php

$date = date_create("2023-03-15 22:25:00", timezone_open("Asia/Dhaka"));//we create here anytime formate it can be future or past

echo date_format($date, "d-m-Y h:i:sa l");
?>