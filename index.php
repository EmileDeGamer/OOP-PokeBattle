<?php
require "Pokemon.php";
require "EnergyType.php";
require "Attack.php";
require "Weakness.php";
require "Resistance.php";

$pikachu = new Pokemon("Pikachu", new EnergyType("Lightning"), 60, [new Attack("Electring Ring", 50), new Attack("Pika punch", 20)], new Weakness("Fire", 1.5), new Resistance("Fightning", 20));
$charmeleon = new Pokemon("Charmeleon", new EnergyType("Fire"), 60, [new Attack("Head Butt", 10), new Attack("Flare", 30)], new Weakness("Water", 2), new Resistance("Lightning", 10));
$pikachu->attack($charmeleon, array_rand($pikachu->getAttacks()));
$charmeleon->attack($pikachu, array_rand($charmeleon->getAttacks()));
$pikachu->attack($charmeleon, array_rand($pikachu->getAttacks()));
$charmeleon->attack($pikachu, array_rand($charmeleon->getAttacks()));