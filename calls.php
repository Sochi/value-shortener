<?php

require sprintf('%s/functions.php', __DIR__));


$chars = '0123456789abcdefghijklmnopqrstuvwxyz'; //ABSDEFGHIJKLMNOPQRSTUVWXYZ
#echo decode($chars,'3zacdqw');
#echo encode($chars,728044);

$orig = 1947032468; //48188687893121111111111111111111111194703246848188687893121111111111111111111111194703246848188687893121111111111111111111111; //19470324
$var = encode($chars,$orig);
$num = decode($chars,$var);

echo $orig.' = '.$var.' = '.$num;

