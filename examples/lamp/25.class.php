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

  $hi = new Hello('es');
  echo $hi -> greet().  '<br>';
  $hi = new Hello('n');
  echo $hi -> greet() . '<br>';