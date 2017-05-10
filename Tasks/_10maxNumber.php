<?php
/* Задайте случайным образом массив из N элементов (целых чисел). 
 * Найдите максимальное число и напечатайте его. */
function create_array ($n) // Создание массива случайных чисел 
{
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(); 
    }
    return $arr;
}
function max_number($array) // Вывод и возврат максимального элемента массива
{
    $maximum = max($array);
    echo "Максимальное значение: ", $maximum;
    return $maximum;
}
$result = create_array(8);
foreach ($result as $k => $v) {
    echo $v, " ";
}
echo "<p>";
max_number($result);
