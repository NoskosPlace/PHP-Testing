<?php
/**
 * This represents the buildings you would see in a commercial zone.
 */
class Building {
    var $window; //holds the window object
    var $lights; //holds state

    function pressLightSwitch() {
        $this->$lights = !$this->$lights;
    }
}

$nosko = new Building();
var_dump($nosko);
?>