<?php
$arrayA = [
    "Alfalfa",
    "Beansprout",
    '12'
];
echo "This is the current version of \$arrayA: \n";
print_r($arrayA);

$arrayB = [
    "animal" => "whale",
    "ocean" => "pacific",
    "planet" => "earth"
];
echo "This is the current version of \$arrayB: \n";
print_r($arrayB);

$replaceA = [
    0 => "Argon",
    1 => "Boron",
    2 => '24'
];
$arrayA = array_replace($arrayA, $replaceA);
echo "This is the replaced version of \$arrayA: \n";
print_r($arrayA);

$replaceB = [
    "animal" => "amphibiosans",
    "ocean" => "unknown",
    "planet" => "amphibios 9"
];
$arrayB = array_replace($arrayB, $replaceB);
echo "This is the replaced version of \$arrayB: \n";
print_r($arrayB);


// Please create an array (arrayA) with 3 values that do not have explicit keys
// Please create an array (arrayB) with 3 values that have explicit keys
// Print these arrays out
// Modify arrayA so that you re-assign the three values
// Modify arrayB so that you re-assign the three values

$arrayA[1] = $arrayA[1] . ' Cesium';
var_dump($arrayA);

?>