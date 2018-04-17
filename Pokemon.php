<?php

class Pokemon {
    public $name;
    public $energyType; 
    public $hitPoints; 
    public $health; 
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $pokemonName, $energyType, $hitPoints, $attacks, $resistance, $weakness)
    {
        $this->name = $name;
        $this->pokemonName = $pokemonName;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;     
    }

    public function __toString() {
        return json_encode($this);
    }

    public function attack($attackName, $target){
        $chosenAttack;
        $enemyType = $target->energyType;

        foreach($this->attacks as $attack){
            if($attack->name == $attackName){
                $chosenAttack = $attack;
            }
        }

        $damage = $chosenAttack->damage;

        foreach($target->resistance as $resist){
            if($this->energyType == $resist->type){
                $damage = $damage - $resist->points;
                
            }
        }

        foreach($target->weakness as $weak){
            if($this->energyType == $weak->type){
                $damage = $damage * $weak->multiplier;
            }
        }
        $target->takeDamage($damage);
    }

    public function takeDamage($damagePoints){
        $this->health = $this->health - $damagePoints;
        echo "current health of ".$this->name." = ".$this->health;
    }

    public function displayInfo(){
        echo "name: ". $this->name;
        echo "<br>pokemon: ".$this->pokemonName;
        echo "<br>Type: ".$this->energyType;
        echo "<br>Health: ".$this->health;
        echo "<br><br>attacks: <br>";
        foreach($this->attacks as $attack){
            echo $attack->name. "  ";
            echo "<br>".$attack->damage."<br>";
        }
        echo "<br>Resistance: <br>";
        foreach($this->resistance as $attack){
            echo $attack->type." X ";
            echo $attack->points."<br>";
        }
        echo"<br>Weakness: <br>";
        foreach($this->weakness as $attack){
            echo $attack->type." X ";
            echo $attack->multiplier."<br>";
        }
        echo "<><><><><><><><><><><br>"; 
    }
    
}
?>  