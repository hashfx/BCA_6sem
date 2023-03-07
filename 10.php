<!-- Demonstrate any 7 math functions like sin, cos, tan... -->

<?php

// abs(): returns the absolute value of a number.
$number = -5;
echo abs($number) . "<br />"; // Outputs: 5

// sin(): returns the sine of a number (in radians).
$angle = 45;
echo sin(deg2rad($angle)) . "<br />"; // Outputs: 0.70710678118655

// cos(): returns the cosine of a number (in radians).
$angle = 45;
echo cos(deg2rad($angle)) . "<br />"; // Outputs: 0.70710678118655

// tan(): returns the tangent of a number (in radians).
$angle = 45;
echo tan(deg2rad($angle)) . "<br />"; // Outputs: 1

// sqrt(): returns the square root of a number.
$number = 16;
echo sqrt($number) . "<br />"; // Outputs: 4

// pow(): calculates the exponential power of a number.
$base = 2;
$exponent = 3;
echo pow($base, $exponent) . "<br />"; // Outputs: 8

// min(): returns the minimum value from a list of numbers.
$numbers = array(5, 3, 7, 1, 9);
echo min($numbers) . "<br />"; // Outputs: 1
?>