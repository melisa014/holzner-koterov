<?php
/* Вывести на экран сумму N случайных чисел */
$N = 13;
for ($i=0; $i < $N; $i++) {
    $numbers[$i] = rand();
} 
$sum = array_sum($numbers);
echo "Sum of numbers now: ", $sum, "<br>";

// http://fkn.ktu10.com/?q=node/8770

/*Альтернативное решение*/
/* Вывести на экран сумму N случайных чисел */
$N = 13;
$sum = 0;
for ($i=0; $i < $N; $i++) {
    $sum += rand();
} 
echo "Sum of numbers now: ", $sum, "<br>";