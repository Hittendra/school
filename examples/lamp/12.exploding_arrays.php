<?php 
echo '<h2> Exploding Arrays </h2>';

$inp = 'This is a sentence with seven words';
$temp = explode(' ' , $inp);
echo '<pre>';
print_r($temp);
echo '</pre>';