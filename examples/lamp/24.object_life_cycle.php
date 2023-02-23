<h3>Object Life Cycle</h3>
<ul>
    <li>Objects are created, used and discarded.</li>
    <li>
        We have special blocks of code (methods) that get called:-
            <ul>
                <li>At the moment of creation(<em>constructor</em>)</li>
                <li>At the moment of destruction (<em> destructor </em>)</li>
            </ul></li>
            <li>Constructors are used a lot.</li>
            <li>Destructors are seldom used.</li>
</ul>

  <dl>
    <dt> Constructor: </dt>
     <dd> The primary purpose of the constructor is to set up some instance variables to have proper initial values when the object is created. </dd>
</dl>

<p>Example:</p>
 
<?php
  class PartyAnimal {
    function __construct() {
        echo ("Constructed <br>");
    }
    function something() {
        echo ("Something <br>");
    }
    function __destruct() {
        echo ("Destructed <br>");
    }
  }

  echo ("--One<br>");
  $x = new PartyAnimal();
echo "<hr>";
  echo ("--Two <br>");
  $y = new PartyAnimal();
echo "<hr>";
echo ("--Three <br>");
$x ->something();
echo ("--The End <br>");