<?php
echo "<h3> Continue </h3>";
echo "<p>The continue statement ends the current iteration and jumps to the top of the loop and starts the next iteration.</p>";

for($count = 1; $count <= 10; $count++)
{
    if (($count % 2) == 0 ) continue;
    echo "Count: $count <br>";
}
echo "Done <br>";