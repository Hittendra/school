<?php
// header('content-type: text/plain');

echo "As PHP evaluates expressions, at times values in the expression need to be converted from one type to another as the computation are done. \n<br>";
echo 'PHP does agressive implicit type conversion <em>(Casting)</em><br>'.PHP_EOL;
echo "We can also make type conversion (casting) explicit with casting operator<br>. \n";

echo "In PHP division forces operands to be floating point. PHP converts expression values silently and agressively.\n";
echo '<pre> "$a =56; $b = 12;
$c = $a / $b;
echo  "C: $c\n";"</pre>';
$a =56; $b = 12;
$c = $a / $b;
echo  "C: $c <br>";

$d = "100" + 36.25 + TRUE;
echo '<pre>$d = "100" + 36.25 + TRUE;</pre>';
echo "d: $d <br>";

echo "The Concatenation operator tries to convert its operands to strings. TRUE becomes an integer 1 and then becomes a string. FALSE is not there, it is even smaller than Zero. At least when it comes to width. \n"."<br>";

echo '<pre>echo "A".FALSE."B\n<br>";
echo "X".TRUE."y\n<br>";</pre>';

echo "A".FALSE."B\n<br>";
echo "X".TRUE."y\n<br>";

echo "<h3> Equality versus Identity </h3>";
echo "<p> The Equality operator (==) in PHP is far more agressive than in most other languages when it comes to data conversion during expression evaluation.</p>";

echo 'if ( 123 == "123") print ("Equality 1 ");<br>';
if ( 123 == "123") print ("Equality 1 ").'<br><br>';

echo 'if ( 123 == "100" + "23" ) print ("Equality 2");';
if ( 123 == "100" + "23" ) print ("<br>Equality 2 <br><br>");


echo 'if (FALSE == "0") print ("Equality 3 ");';
if (FALSE == "0") print ("<br>Equality 3 <br><br>");

echo 'if (5<6 == "2" - "1") print ("Equality 4 ");';
if (5<6 == "2" - "1") print ("<br>Equality 4 <br><br>");

echo 'if (5<6 === TRUE) print ("Equality 5 ");';
if (5<6 === TRUE) print ("<br>Equality 5 <br><br>");