<?php
class Resistance {
    public $type;
    public $points;

    public function __construct($type, $points){
        $this->type = $type;
        $this->points = $points;
    }
}