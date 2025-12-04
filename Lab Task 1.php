<?php
// Variables of different data types
$name = "Dristi";      // string
$age = 22;             // integer
$height = 5.4;         // float
$isStudent = true;     // boolean

// Arithmetic operations
$num1 = 10;
$num2 = 3;

$add = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

echo "Addition: $add<br>";
echo "Subtraction: $sub<br>";
echo "Multiplication: $mul<br>";
echo "Division: $div<br><br>";

// Output sum using echo and print
echo "Sum using echo: " . ($num1 + $num2) . "<br>";
print "Sum using print: " . ($num1 + $num2) . "<br><br>";

// var_dump for each variable
var_dump($name); echo "<br>";
var_dump($age); echo "<br>";
var_dump($height); echo "<br>";
var_dump($isStudent); echo "<br>";
?>
