<?php
  //Error control Operators (@)

  //$x = file('foo.txt');
  $x = @file('foo.txt');  //using @ operator suppresses the error.
  echo '<hr>';

  //Increment and Decrement operators.
   
  //Incrementing a NULL operators results in its value increased to 1. Decrementing doesn't have any effect on NULL.
  $x = NULL;
  var_dump($x);
  echo ++$x;

  //Decrement doesn't have any effect on strings but Increment has
   echo '<hr>';
  $x = 'abc';
  echo $x . '<br>';
  echo ++$x;

  //logical operators ( &&  || ! and or xor)

  // Even though we expect (&& , and ) to behave exactly  the same but they behave differently because of "PRECEDENCE".
  //e.g.
  echo '<hr>';
  $x = false;
  $y = false;
  $z = $x && $y;
  var_dump($z);

  $z = $x and $y;
  echo '<br>';
  var_dump($z);

  //PHP does short-circuiting while evaluating the OR operators
  function hello() {
    echo 'Hello World';
    return false;
  }
echo '<hr>';
var_dump($x || $y);
echo '<br>';
var_dump($x || hello());
echo '<br>';
var_dump($x && hello());

