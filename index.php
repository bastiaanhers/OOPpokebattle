<?php

spl_autoload_register(function($classname){
    require $classname . '.php';
});

$bigBoy = new Charmander('bigBoy');
$smallBoy = new Pikachu('smallBoy');

echo $bigBoy->name." has: ".$bigBoy->health."<br>";
echo $smallBoy->name." has: ".$smallBoy->health;
echo $smallBoy->name. " attacks ". $bigBoy;
echo $bigBoy->name. " attacks ". $smallBoy;
$smallBoy->attack("Electric Ring", $bigBoy);
$bigBoy->attack("Flare", $smallBoy);

?>


