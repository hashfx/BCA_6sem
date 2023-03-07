<!-- sum of all digits of number -->

<?php
$number = 12345;
$sum = 0;

while ($number > 0) {
  $sum += $number % 10;
  $number = (int)($number / 10);
}

echo "The sum of digits is: " . $sum;
?>