<?php

   echo '<h3> Variable Scope </h3>
            <ul>
                <li> In general, variable names used inside of function code, do not mix with the variable outside of the fucntion to avoid "unexpected" side effects if two programmers use the same variable name in different parts of the code. </li>
                <li> We call this "name spacing" the variables. The function variables are in one "name space" whilst the main variables are in another "name space". </li>
                </ul>';
               
              echo '<h3> Normal Scope (Isolated) </h3>';

                echo ' <pre>  function tryzap () {
                    $val = 100;
                }
                $val = 10;
                tryzap();
                echo "Tryzap  =  $val <br>";  </pre> ';

                function tryzap () {
                    $val = 100;
                }
                $val = 10;
                tryzap();
                echo "Tryzap  =  $val <br>";


                echo '<h3> Global Scope (Shared) </h3>
                       <ul>
                           <li>Global Variables - Use Rarely. </li>
                           <li> Passing value back as return value. </li>
                           <li> Passing variable in by reference. </li>
                           <li> <em>The above three points can be  used to avoid global variable scope in a function.</em> </li>
                           <li> If you use global variables use long names with nice unique prefixes. </li>
                           </ul>';

                echo ' <pre>   function dozap() {
                    global $val;
                    $val = 100;
                }

                $val = 10;
                dozap();
                echo "DoZap  =  $val <br>";  </pre> ';

                function dozap() {
                    global $val;
                    $val = 100;
                }
                $val = 10;
                dozap();
                echo "DoZap  =  $val <br>";