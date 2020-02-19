<?php 
class Calculator {
	var $number1 = 500;
	var $counter = 1;
	function add($number,$number2) {
		$equation = $number + $number2;
		$this->counter+1;
		print_r($equation);
	}
	function subtract($number1, $number2) {
		$equation = $number1 - $number2;
		$this->counter+1;
		print_r($equation);
	}
	function getValue($poop) {
		echo $poop;
    }
    function multiply($number, $number2) {
        $equation = $number * $number2;
        $valid = intval($number);
        $valid2 = intval($number2);
            if($valid == 0) {
                echo('Invalid input, or multiplied by zero, which will always be zero.');
        }   elseif($valid2 == 0) {
                echo('Invalid input, or multiplied by zero, which will always be zero.');
        }   else {
                print_r($equation);
        }

        function checkString($i) {
            switch ($i) {
                case "apple":
                    echo "i is apple";
                    break;
                case "bar":
                    echo "i is bar";
                    break;
                case "cake":
                    echo "i is cake";
                    break;
            }
        }
    }

}
// $newCalculator = new Calculator();
// // $newCalculator->add(2);
// // $newCalculator->subtract(100, 50);
// // print "\n";
// // $newCalculator->getValue(9);
// // print "\n";
// // Calculator::getValue(6);

// //$newCalculator->multiply(2,321);
// $newCalculator->checkString('apple')

$tern = (true) ?  : "banana";
print_r($tern);
// echo "\n";
// $newCalculator->subtract(666,420);
//Calculator::add(1, 2);
/*
using ($this) Make line 8 function to add var 500 + $number2 = 502 as the end result
php pass by reference
Week3
Create a calculator class with a function that adds 2 numbers and a function that subtracts 2 numbers.
This class must have 0 properties.
These methods will need to be able to be called statically https://www.geeksforgeeks.org/static-function-in-php/ 
These methods will need to validate that the input argument is a valid integer https://www.php.net/manual/en/function.intval.php */
?>