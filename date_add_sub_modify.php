<?php

$date = date_create("2015-05-15");
//date_add($date, date_interval_create_from_date_string("30 days"));//to add days with exsiting date
//date_sub($date, date_interval_create_from_date_string("30 days"));//to substract days eith existing date
//date_modify($date,"10 days");//for add
date_modify($date,"-10 days");//for substract
echo date_format($date,"d-m-y");
?>