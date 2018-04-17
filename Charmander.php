<?php

class Charmander extends Pokemon{
    //public $name; 
    public $pokemonName = 'Charmander';
    public $energyType = "Fire";
    public $hitPoints = 60; 


    public function __construct($name){
        //$this->name = $name;
        $attacks = [
            new Attack('Head Butt', 10),
            new Attack('Flare', 30)
        ];

        $resistance = [
            new Resistance('Electric', 10)
        ];

        $weakness = [
            new Weakness ('Water', 2)
        ];

        parent::__construct(
            $name, 
            $this->pokemonName, 
            $this->energyType, 
            $this->hitPoints, 
            $attacks, 
            $resistance, 
            $weakness
        );       
    }
}
?>