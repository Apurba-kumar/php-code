 <?php
 
 //date_time_set(object,hour,minute,second,microsecond)
 
 $date = date_create("2015-05-15");

 date_time_set($date, 13, 20);//add time in exsiting date

 echo date_format($date, "d-m-Y H:i:s");
 ?>