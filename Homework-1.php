<?php


$a = 5;
$b = 9;

$temp = $a;
$a = $b;
$b = $temp;

echo "Значение a: $a\n";  // Должно вывести 9
echo "Значение b: $b\n";  // Должно вывести 5

