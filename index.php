<?php
require "Pokemon.php";

$pikachu = new Pokemon("pikachu", "Lightning", 60, [["Electric Ring", 50], ["Pika punch", 20]], ["Fire", 1.5], ["Resistance", 20]);
$charmeleon = new Pokemon("charmeleon", "Fire", 60, [["Head Butt", 10], ["Flare", 30]], ["Water", 2], ["Lightning", 10]);
$pikachu->attack($charmeleon, "Electric Ring");
$charmeleon->attack($pikachu, "Flare");
$pikachu->attack($charmeleon, "Electric Ring");
$charmeleon->attack($pikachu, "Head Butt");