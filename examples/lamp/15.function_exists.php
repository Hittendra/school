<?php

echo '<p> Sometimes depending on the version or configuration of a particular PHP instance, some function may be missing. We can check that. </p>';

echo '<pre> if ( function_exists("array_combine")) {
    echo "Function exists.";
} else {
    echo "Function does not exist. ";
} </pre>';

if ( function_exists("array_combine")) {
    echo "Function exists.";
} else {
    echo "Function does not exist. ";
}