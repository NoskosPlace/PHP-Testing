<?php 
$fruits = ["apple"];
array_push($fruits, "banana", "kiwi", "orange");
$dogs = ["woofer"];
// array_splice($fruits, 1, 4, $dogs);
$fruits2 = array_pop($fruits);
// foreach ($fruits as $fruit){
//     echo "I haz a " . $fruit . "\n";
// }
var_dump($fruits2);
?>