<?php

spl_autoload_register(function($classname){
    require $classname . '.php';
});

$bigBoy = new Charmander('Charmander');
$smallBoy = new Pikachu('Pikachu');

echo $bigBoy->name." has: ".$bigBoy->health."<br>";
echo $smallBoy->name." has: ".$smallBoy->health."<br><br>";

echo $smallBoy->name. " attacks ". $bigBoy->name . " with Electric Ring <br>";
$smallBoy->attack("Electric Ring", $bigBoy);
echo $bigBoy->name . " attacks " . $smallBoy->name . " with Flare<br>";
$bigBoy->attack("Flare", $smallBoy);


?>


