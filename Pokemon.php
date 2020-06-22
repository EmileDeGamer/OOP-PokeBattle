<?php
require "Displayer.php";

class Pokemon{
    public static $pokemons = array();

    private $name, $energyType, $hitpoints, $health, $attacks = array(), $weakness, $resistance;

    public function __construct($name, $energyType, $hitpoints, $attacks = array(), $weakness, $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        array_push(self::$pokemons, $this);
    }

    public function attack($enemy, $attack){
        $tempDamage = $this->attacks[$attack]->damage;
        if($enemy->weakness->energyType->type == $this->energyType->type){
            $tempDamage = $tempDamage * $enemy->weakness->multiplier;
        }
        if($enemy->resistance->energyType->type == $this->energyType->type){
            $tempDamage = $tempDamage - $enemy->resistance->value;
        }
        DisplayData::Display($enemy->name . " has " . $enemy->health . " hp left <br>");
        $enemy->health -= $tempDamage;
        DisplayData::Display($this->name . " did " . $tempDamage . " damage to " . $enemy->name . " with " . $this->attacks[$attack]->name . "<br>");
        if($enemy->health <= 0){
            $enemy->health = 0;
        }
        DisplayData::Display($enemy->name . " has " . $enemy->health . " hp left <br>");
        self::getPopulation();
    }

    public function getAttacks(){
        return $this->attacks;
    }

    public static function getPopulation(){
        for ($i=0; $i < count(self::$pokemons); $i++) { 
            if(self::$pokemons[$i]->health <= 0){
                unset(self::$pokemons[$i]);
            }
        }
        DisplayData::Display(count(self::$pokemons) . " Pokemons left <br>");
    }
}