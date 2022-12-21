<?php

//for month
echo ("Today is : " .date("d"))."<br>";//if date 0 to 9 it's show 01 to 09
echo ("Today is : " .date("j"))."<br>";//it's does't show 0 before 1 to 9
echo ("Today is : " .date("jS"))."<br>";//it's return st,nd rd with date

//for month
echo ("Month is : " .date("F"))."<br>";//it's return full name of month
echo ("Month is : " .date("M"))."<br>";//it's return short form of month
echo ("Month is : " .date("m"))."<br>";//it's month 0 to 9 with 01 to 09
echo ("Month is : " .date("n"))."<br>";//it's return 1 to 9 month with single digit

//for year
echo ("Year is : " .date("Y"))."<br>";//it's return full form of year
echo ("Year is : " .date("y"))."<br>";//it's return short form of year


//for full date
echo ("Today full date is : " .date("d/m/Y"))."<br>";
echo ("Today is : " .date("Y-m-d"))."<br>";
echo ("Today full date is : " .date("jS-M-Y"))."<br>";
echo ("Today is : " .date("j-M-Y"))."<br>";

//for day
echo ("Today is : " .date("D"))."<br>";//return day of week as short form
echo ("Today is : " .date("l"))."<br>";//return day of week as a full form
echo ("Week day is : " .date("N"))."<br>";//it starts Monday as 1 and end sunday as 7
echo ("Week day is : " .date("w"))."<br>";//it starts sunday as 0 and end saturday as 6

//for a year as a day
echo ("Today is : " .date("z"))."<br>";//it's return 1 to 365 days of current day of a year

//return which week of a year
echo ("Week of the year: " .date("W"))."<br>";

//return how many days of a month
echo ("Days of the month : " .date("t"))."<br>";

//check if leap year
echo ("Is this is leap year : " .date("L"))."<br>";//return 1 or 0 if 1 then its a leap year
?>