<?php
$a = $_GET['1'];
$b = $_GET['2'];

// Перевірка, чи введені числа є цілими
if (!is_numeric($a) || !is_numeric($b) || !is_int($a + 0) || !is_int($b + 0)) {
    echo "Введені значення повинні бути цілими числами.";
    exit;
}

$sum = $a + $b;
$product = $a * $b;
$difference = $a - $b;
$quotient = $a / $b;

echo "Сума: " . $sum . "<br>";
echo "Добуток: " . $product . "<br>";
echo "Різниця: " . $difference . "<br>";
echo "Частка: " . $quotient . "<br>";
?>
