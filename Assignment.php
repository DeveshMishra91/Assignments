<?php
// Multiplication table in PHP using For loop

$x = 17;
$r = 11;

echo "----The input number is: ", $x, "\n";
echo "\n----The range number is: ", $r, "\n";

// $x - To store the input number
// $r - To store the multiplication range

echo "\n\n----The above multiplication table--------\n\n";

for ($i = 1; $i <= $r; $i++) {
    echo "\t", $x, " * ", $i, " = ", $x * $i, "\n";
}

?>