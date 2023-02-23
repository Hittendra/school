<?php
header('Content-type: text/plain');
echo'The ternary operator comes from C. It allows conditional expressions. It is like a one line if-then-else. Like all "contraction" syntaxes, we use it carefully.'.PHP_EOL .PHP_EOL ;

$www=123;
$msg = $www > 100 ? "Large" : "small";
echo "First : $msg \n";
$msg = ( $www % 2 == 0) ? "Even" : "Odd";
echo "Second: $msg \n";
$msg = ( $www % 2) ? "Odd" : "Even";
echo "Third: $msg \n";