<?php
echo '<h3> To function or not to function </h3>';
echo '<ul>
             <li> Organize your code into "paragraphs" - capture a complete thought and "name it."</li>
             <li>Don\'t repeat yourself - make  it work once and then reuse it.</li>
             <li>If something get too long or complex, break up logical chunks and put those chunks in functions.</li>
             <li>Make a library of common stuff that you do over and over - perhaps share this with your firends.</li>
             </ul>';

    echo '<h3> Defining Your Own Functions </h3>';
         echo '<p> We use the function keyword to define a function, we name the function and take optional argument variables. The body of the function is in a block of code{} </p>';

         echo '<pre>  function greet() {
            print "Hello ";
         }
         greet(); </pre>';

         function greet() {
            print "Hello <br>";
         }
         greet();

         echo '<h3> Choosing Function Names </h3>';
         echo ' <ul>
                     <li> Much like variable names - but do not start with a dollar sign.</li>
                     <li> Start with a letter or underscore - consists of letters, numbers, and underscores(_).</li>
                     <li> Avoid built-in function names. </li>
                     <li> Case does not matter - but please do not take advantage of this. </li>
                     </ul> ';

        echo '<h3> Return Values </h3>';
        echo '<p> Often a function will take its arguments, do some computation and return a value to be used as the value fo the function call in the calling expression. The return keyword is used for this. </p>';

        echo '<pre>  function greeting() {
            return "Hello  ";
        }
       print greeting() . "Situ <br>";
       print greeting() . "Sonu <br>";</pre>';

        function greeting() {
            return "Hello  ";
        }
       print greeting() . "Situ <br>";
       print greeting() . "Sonu <br>";


  echo '<h3> Arguments </h3>';
  echo '<p> Functions can choose to accept optional arguments. Within the function definition the variable names are effectively "aliases" to the values passed in when the function is called. </p>';

  echo '<pre>  function howdy($lang) {
    if ( $lang == \'es\') return "Hola";
    if ( $lang == \'fr\') return "Bonjour";
    return "Hello";
  } 
  print howdy(\'es\') . "  Situ <br>";
  echo howdy(\'fr\')  . "   Sonu <br>";
  echo howdy(\'null\')  . "  Shubham <br>";</pre>';

  function howdy($lang) {
    if ( $lang == 'es') return "Hola";
    if ( $lang == 'fr') return "Bonjour";
    return "Hello";
  }
  print howdy('es') . "  Situ <br>";
  echo howdy('fr')  . "   Sonu <br>";
  echo howdy('null')  . "  Shubham <br>";

  echo '<h3> Optional Arguments </h3>';
  echo '<p> Arguments can have defaults and so can be omitted </p>';

  function howdy_arg($lang = 'es') {
    if ( $lang == 'es') return "Hola";
    if ( $lang == 'fr') return "Bonjour";
    return "Hello";
  }

  echo howdy_arg() . "  Situ <br>";


  echo ' <h3> Call by Value </h3>';
  echo '<ul>
           <li> The argument variable within the function is an "alias" to the actual variable.</li>
           <li> But even further, the alias is to a *copy* of the actual variable in the function call. </li>
           </ul>';

           echo '<pre> function double($alias) {
            $alias = $alias * 2;
            return $alias;
           }
           $val =10;
           $dval = double($val);
           echo "Value =  $val  Doubled =  $dval <br>";</pre>';

           function double($alias) {
            $alias = $alias * 2;
            return $alias;
           }
           $val =10;
           $dval = double($val);
           echo "Value =  $val  Doubled =  $dval <br>";



    echo '<h3> Call by Reference </h3>';
    echo '<p> Sometimes we want a function to change one of its arguments - so we indicate that an argument is "by reference" using ampersand (&). </p>';

    echo '<pre> function triple(&$realthing) {
        $realthing = $realthing * 3;
    }
    $val = 10;
    triple($val);
    echo "Triple =  $val <br>"; </pre>';

    function triple(&$realthing) {
        $realthing = $realthing * 3;
    }
    $val = 10;
    triple($val);
    echo "Triple =  $val <br>";

