<?php
class Resistance{
    public $energyType, $value;

    public function __construct($energyType, $value){
        $this->energyType = new EnergyType($energyType);
        $this->value = $value;
    }
}