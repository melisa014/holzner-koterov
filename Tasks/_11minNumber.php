<?php
/* Задайте случайным образом массив из 20-ти элементов (целых чисел).
 * Найдите минимальное число и напечатайте его.*/
function create_array() // Создание массива случайных чисел 
{
    for ($i = 0; $i < 20; $i++) {
        $arr[$i] = rand(1,9); 
    }
    return $arr;
}
function min_number($array) // Вывод и возврат минимального элемента массива
{
    $minimum = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $minimum) {
           $minimum = $array[$i]; 
        }
    }
    return $minimum;
}
$result = create_array();
while (list($key, $value) = each($result)) { 
    echo $value, " ";
}
echo "<p>";
echo "Минимальное значение: ", min_number($result);


