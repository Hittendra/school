<?php

    require_once __DIR__. '/lib/ship.php';

function get_ships()
{    
    $ships = array();

    $ship = new Ship();
    $ship->name = 'Jedi Starfighter';
    $ship->weaponPower = 5;
    $ship->jediFactor = 15;
    $ship->strength = 30;

    $ships['starfighter'] = $ship;
    return $ships;
}