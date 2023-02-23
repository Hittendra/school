<?php
echo '<pre> <h3>The most common array functions are:</h3>
       <ul>
         <li>array_key_exists($key, $ar) -Returns TRUE if key is set in the array.</li>
         <li>isset($ar[\'key\'] - Returns TRUE if key is set in the array. </li>
         <li>count($ar) -How many elements in an array.</li>
         <li>is_array($ar) -Returns TRUE if a variable is an array.</li>
         <li>sort($ar) -Sorts the array values <em><strong>(losses key)</strong></em>.</li>
         <li>ksort($ar) -Sorts the array by key. </li>
         <li>asort($ar) -Sorts array by value, keeping key association.</li>
         <li>shuffle($ar) -Shuffles the array into random order. </li>
         </pre>';
         echo '<hr>';

    $za = array();
    $za['name'] = 'Chuck Bill';
    $za['course'] = 'WA4E';

    if(array_key_exists('course', $za)) {
        echo 'Course exists, and the name of the course is :'.$za['course'].' <br>';
    } else {
        echo 'Course does not exist. <br>';
    }

    echo isset($za['name']) ? 'name is set. <br>' : 'name is not set. <br>';
    echo isset($za['addr']) ? 'addr is set. <br>': 'addr is not set. <br>';
