<?php
class Weakness{
    public $energyType, $multiplier;

    public function __construct($energyType, $multiplier){
        $this->energyType = new EnergyType($energyType);
        $this->multiplier = $multiplier;
    }
}