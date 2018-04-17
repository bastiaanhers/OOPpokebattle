<?php

class Pikachu extends Pokemon{
    public $name; 
    public $pokemonName = 'Pikachu';
    public $energyType = "Electric";
    public $hitPoints = 60; 


    public function __construct($name){
        $attacks = [
            new Attack('Electric Ring', 50),
            new Attack('Pika Punch', 20)
        ];
        $resistance = [
            new Resistance('Fighting', 20)
        ];
        $weakness = [
            new Weakness ('Fire', 1.5),
        ];

        parent::__construct(
            $name, 
            $this->pokemonName, 
            $this->energyType, 
            $this->hitPoints, 
            $attacks, 
            $resistance, 
            $weakness);       
    }
}