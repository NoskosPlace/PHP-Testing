<?php

class Building {
    var $windows = 1; //holds window object
    var $lights = false; //holds state

    function pressLightSwitch() {
        $this->lights = !$this->lights;
    }

    function setWindowCount($numberOfWindows) {
        if (intval($numberOfWindows)) {
            $this->windows = $numberOfWindows;
        }
    }
}

$building1 = new Building();
$building1->pressLightSwitch();
$building2 = new Building();
$building3 = new Building();
$building3->setWindowCount(52); //create function
var_dump($building1);
var_dump($building2);
var_dump($building3);
