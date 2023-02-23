<?php
header('Content-type:text/plain');

echo 'Side-Effect Assignment are pure contractions. Use them sapringly.'.PHP_EOL;

echo "\n";
$out ="Hello";
$out = $out . " ";
$out .= "World";
$out .= "\n";
echo $out;

$count = 0;
$count += 1;
echo "Count: $count\n";


