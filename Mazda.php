<?php
require_once('Car.php');

$mazdaMiata = new Car(4, 8, "2.0L");
$json = json_encode($mazdaMiata);
print_r($json);
//print_r($mazdaMiata);
echo "\n";
$mazdaMiata->setWindowCount(4);
$json = json_encode($mazdaMiata);
print_r($json);
//print_r($mazdaMiata);