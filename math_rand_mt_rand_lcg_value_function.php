<?php

echo (rand())."<br>";
echo rand(1,20)."<br>";//return a random value between 1 to 20

echo (mt_rand())."<br>";
echo mt_rand(1,20)."<br>";//Mersenne Twister algorithm ..4x faster than rand function

echo lcg_value();
?>