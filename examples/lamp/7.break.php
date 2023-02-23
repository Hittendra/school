<?php
echo "<h4> Breaking Out of a Loop</h4>";

echo "<pre> * The break statement ends the current loop and jumps to the statement immediately following the loop.
* It is like a loop test that can happen anywhere in the body of the loop. </pre>";

for($count = 1; $count <=600; $count++) {
    if ($count == 5) break;
    echo "Count: $count <br>";
}
echo "Done <br>";