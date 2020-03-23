<?php
class RequestDataFromAllPokemons{
    public static $pokemons = array();
    public static function getPopulation(){
        for ($i=0; $i < count(self::$pokemons); $i++) { 
            if(self::$pokemons[$i]->health <= 0){
                unset(self::$pokemons[$i]);
            }
        }

        echo count(self::$pokemons) . " Pokemons left <br>";
    }
}