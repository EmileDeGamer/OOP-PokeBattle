<?php
class Attack{
    public $name, $damage;

    public function __construct($name, $damage){
        $this->name = $name;
        $this->damage = $damage;
    }
}