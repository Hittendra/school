<h3>Inheritance</h3>
<ul>
    <li>When we make a new class - we can reuse an existing class and inherit all the capabilities of an existing class and then add our own little bit to make our new class.</li>
    <li>Another form of store and reuse.</li>
    <li>Write once - reuse many times.</li>
    <li>The new class (child) has all the capabilities of the old class (parent) - and then some more.</li>
</ul>
<p>Example:</p>

<?php 
  class Hello {
    protected $lang; // only accessible in the classs
    function __construct($lang) {
        $this -> lang = $lang;
    }
    function greet () {
        if ( $this -> lang == 'fr') return 'Bonjour';
        if ( $this -> lang == 'es') return 'Hola';
        return 'Hello';
    }
  }

  class Social extends Hello {
    function bye() {
        if ($this -> lang == 'fr') return 'Au revior';
        if ($this -> lang == 'es') return 'Adios';
        return 'goodbye';
    }
  }

 $hi = new Social ('es');
 echo $hi -> greet() . '<br>';
 echo $hi -> bye(). '<br>';