<?php
/*Задайте случайным образом массив из N элементов. 
 * Выведите его на экран "ёлочкой" */
function create_array ($n) // Создание массива случайных чисел 
{
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 9) ; 
    }
    return $arr ;
}
 
function printer_tree ($tree) // Вывод "ёлочкой"
{
    $level= " "; // Массив "нулевой" строки
    while (0 < count($tree)) {
        
        $level = array_slice($tree, 0, count($level)+1);  // Массив второй строки, равный длине первого массива +1
        foreach ($level as $number) { // печатается "вторая" строка
            echo $number, " "; 
        }
        $tree = array_slice($tree, count($level)); // и сокращает $tree на длину выведенной строки
        echo "<br>";
    }
}
$result = create_array(6);
foreach ($result as $k => $v) {
    echo $v, " ";
}
echo "<p>";
printer_tree($result);