<?php
echo "<p> A while loop is a \"Zero-trip\" loop with the test at the top before the first iteration starts. We hand construct the iteration variable to implement a counted loop. </p>";

$fuel = 1;
while ($fuel <=10)
{
    print "Vroom Vroom  $fuel<br>";
    $fuel += 1;
}