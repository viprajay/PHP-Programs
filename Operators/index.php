<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  background-color: #060606;
  color:white;
}
</style>
<body>
<?php

// Arithmetic Operators
$a = 10;
$b = 3;

echo "1 . Arithmetic Operators\n";
echo "<br>";
echo "<br>";
echo "Addition: " . ($a + $b) . "\n"; 
echo"<br>";
echo "Subtraction: " . ($a - $b) . "\n"; 
echo"<br>";
echo "Multiplication: " . ($a * $b) . "\n";
echo"<br>";
echo "Division: " . ($a / $b) . "\n"; 
echo"<br>";
echo "Modulus: " . ($a % $b) . "\n";
echo"<br>";
echo "Exponentiation: " . ($a ** $b) . "\n";
echo"<br>";
echo"<br>";

// Assignment Operators
echo "\n2 . Assignment Operators\n";
echo "<br>";
echo "<br>";
$a = 10;
$a += 5; 
echo "Addition assignment: $a\n"; 
echo "<br>";
$a -= 3; 
echo "Subtraction assignment: $a\n"; 
echo "<br>";
$a *= 2; 
echo "Multiplication assignment: $a\n"; 
echo "<br>";
$a /= 4; 
echo "Division assignment: $a\n"; 
echo "<br>";
$a %= 3; 
echo "Modulus assignment: $a\n"; 
echo "<br>";
$a = 5;
$a **= 2; 
echo "Exponentiation assignment: $a\n"; 
echo "<br>";
echo "<br>";

// Comparison Operators
echo "\n3 . Comparison Operators\n";
$a = 5;
$b = 10;
echo "<br>";
echo "<br>";
echo "Equal: ";
var_dump($a == $b); 
echo "<br>";
echo "Identical: ";
var_dump($a === $b); 
echo "<br>";
echo "Not equal: ";
var_dump($a != $b); 
echo "<br>";
echo "Not identical: ";
var_dump($a !== $b); 
echo "<br>";
echo "Less than: ";
var_dump($a < $b); 
echo "<br>";
echo "Greater than: ";
var_dump($a > $b); 
echo "<br>";
echo "Less than or equal to: ";
var_dump($a <= $b); 
echo "<br>";
echo "Greater than or equal to: ";
var_dump($a >= $b);
echo "<br>";
echo "<br>";

// Increment/Decrement Operators
echo "\n4 . Increment/Decrement Operators\n";
echo "<br>";echo "<br>";
$a = 5;
echo "Post-increment: " . $a++ . "\n"; 
echo "<br>";
echo "After post-increment: $a\n"; 
echo "<br>";
$a = 5;
echo "Pre-increment: " . ++$a . "\n"; 
echo "<br>";
$a = 5;
echo "Post-decrement: " . $a-- . "\n"; 
echo "<br>";
echo "After post-decrement: $a\n"; 
echo "<br>";
$a = 5;
echo "Pre-decrement: " . --$a . "\n"; 
echo "<br>";
echo "<br>";

// Logical Operators
echo "\n5 . Logical Operators\n";
$a = true;
$b = false;
echo "<br>";
echo "<br>";
echo "And: ";
var_dump($a && $b); 
echo "<br>";
echo "Or: ";
var_dump($a || $b);
echo "<br>";
echo "Xor: ";
var_dump($a xor $b);
echo "<br>";
echo "Not: ";
var_dump(!$a); 
echo "<br>";
echo "<br>";

// String Operators
echo "\n6 . String Operators\n";
echo "<br>";
echo "<br>";
$a = "Hello";
$b = "World";
echo "Concatenation: " . $a . " " . $b . "\n"; 
echo "<br>";
$a .= $b; 
echo "Concatenation assignment: " . $a . "\n"; 
echo "<br>";
echo "<br>";

// Array Operators
echo "\n7 . Array Operators\n";
echo "<br>";
echo "<br>";
$array1 = array("a" => "red", "b" => "green");
$array2 = array("c" => "blue", "d" => "yellow");
$result = $array1 + $array2; 
echo "Union: ";
print_r($result); 
echo "<br>";
echo "Equality: ";
var_dump($array1 == $array2); 
echo "<br>";
echo "Identity: ";
var_dump($array1 === $array2); 
echo "<br>";
echo "Inequality: ";
var_dump($array1 != $array2); 
echo "<br>";
echo "Non-identity: ";
var_dump($array1 !== $array2); 
echo "<br>";
echo "<br>";

// Spaceship Operator
echo "\n8 . Spaceship Operator\n";
echo "<br>";
echo "<br>";
echo "Comparison: ";
echo $a <=> $b;
?>

</body>
</html>