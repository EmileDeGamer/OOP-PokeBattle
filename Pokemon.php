<?php
require "EnergyType.php";
require "Attack.php";
require "Weakness.php";
require "Resistance.php";
class Pokemon{
    public $name, $energyType, $hitpoints, $health, $attacks = array(), $weakness, $resistance;

    public function __construct($name, $energyType, $hitpoints, $attacks = array(), $weakness = array(), $resistance = array()){
        $this->name = $name;
        $this->energyType = new EnergyType($energyType);
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        for ($i=0; $i < count($attacks); $i++) { 
            $this->attacks[$i] = new Attack($attacks[0], $attacks[1]);
        }
        $this->weakness = new Weakness($weakness[0], $weakness[1]);
        $this->resistance = new Resistance($resistance[0], $resistance[1]);
    }

    public function attack($enemy, $attack){
        print_r("<br>");
        for ($i=0; $i < count($this->attacks); $i++) { 
            if($this->attacks[$i]->name == $attack){
                print_r(":D");
            }
        }
        print_r($this->attacks[0]);
        //fix defining damage and name
        //print_r($this->attacks);
        //$this->attacks[$attack] * $enemy->weakness->multiplier;
    }
}