<?php
// For loop 1 to 20
echo "For loop numbers (1 to 20):<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
echo "<br><br>";

// While loop – even numbers
echo "Even numbers (1 to 20):<br>";
$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}
echo "<br><br>";

// Associative array
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange",
    "kiwi" => "green"
];

// Foreach loop + break after 5 numbers
echo "Fruits and colors:<br>";
$count = 0;

foreach ($fruits as $fruit => $color) {
    echo "$fruit is $color<br>";
    $count++;

    if ($count == 5) {
        break;
    }
}
?>
