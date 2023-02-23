<?php
echo "A do-while loop is a \"One-trip \" loop with the test at the bottom after the first iteration completes.<br>";

$count = 1;
do{
    echo "$count times 5 is ". $count * 5;
    echo '<br>';
} while (++$count <=5);