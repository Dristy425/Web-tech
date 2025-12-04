<?php
// Sum function
function sum($a, $b) {
    return $a + $b;
}

// Calling sum
echo "Sum(5, 7) = " . sum(5, 7) . "<br>";
echo "Sum(12, 8) = " . sum(12, 8) . "<br><br>";

// Factorial function (recursion)
function factorial($n) {
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}

// Calling factorial
echo "Factorial of 5 = " . factorial(5) . "<br><br>";

// Prime checking function
function is_prime($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// Calling is_prime
$numbers = [3, 10, 17, 20];

foreach ($numbers as $n) {
    if (is_prime($n)) {
        echo "$n is prime<br>";
    } else {
        echo "$n is not prime<br>";
    }
}
?>
