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
            $this->attacks[$i] = new Attack($attacks[$i][0], $attacks[$i][1]);
        }
        $this->weakness = new Weakness($weakness[0], $weakness[1]);
        $this->resistance = new Resistance($resistance[0], $resistance[1]);
    }

    public function attack($enemy, $attack){
        for ($i=0; $i < count($this->attacks); $i++) { 
            if($this->attacks[$i]->name == $attack){
                $tempDamage = $this->attacks[$i]->damage;
                if($enemy->weakness->energyType->type == $this->energyType->type){
                    $tempDamage = $tempDamage * $enemy->weakness->multiplier;
                }
                if($enemy->resistance->energyType->type == $this->energyType->type){
                    $tempDamage = $tempDamage - $enemy->resistance->value;
                }
                echo $enemy->name . " has " . $enemy->hitpoints . " hp left <br>";
                $enemy->hitpoints -= $tempDamage;
                echo $this->name . " did " . $tempDamage . " damage to " . $enemy->name . " with " . $attack . "<br>";
                echo $enemy->name . " has " . $enemy->hitpoints . " hp left <br>";
            }
        }  
    }
}