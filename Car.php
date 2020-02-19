<?php

class Car {
    var $windows = 6;
    var $lightsOn = false;
    var $wheelCount = 0;
    var $engineCylinders = 0;
    var $engineDisplacement = 0;

    function pressLightSwitch() {
        $this->lightsOn = !$this->lightsOn;
    }

    function setWindowCount($numberOfWindows) {
        if (intval($numberOfWindows)) {
            $this->windows = $numberOfWindows;
        }
    }

    function __construct($wheelCount, $engineCylinders, $engineDisplacement) {
    $this->wheelCount = $wheelCount;
    $this->engineCylinders = $engineCylinders;
    $this->engineDisplacement = $engineDisplacement;
    }
}
