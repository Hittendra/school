<?php

echo '<p>Null Coalesce Operator is prefferred over Ternary Operator in PHP version above 7.0</p>';

$za = array();
$za['name'] = 'Chuck';
$za['course'] = 'WA4E';

$name = $za['name'] ?? 'not found';
$addr = $za['addr'] ?? 'not found';

echo '<pre> $name = $za[\'name\'] ?? \'not found\';
$addr = $za[\'addr\'] ?? \'not found\';
</pre>';

echo 'Name = '.$name.'<br>';
echo 'Address = '. $addr . '<br>';