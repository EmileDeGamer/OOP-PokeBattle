<?php
require "Pokemon.php";
$pikachu = new Pokemon("pikachu", "Lightning", 60, [["Electric Ring", 50], ["Pika punch", 20]], ["Fire", 1.5], ["Resistance", 20]);
var_dump($pikachu);
$charmeleon = new Pokemon("charmeleon", "Fire", 60, [["Head Butt", 10], ["Flare", 30]], ["Water", 2], ["Lightning", 10]);
var_dump($charmeleon);
$charmeleon->attack($pikachu, "Electric Ring");