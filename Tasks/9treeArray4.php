<?php
/*Задайте случайным образом массив из N элементов. 
 * Выведите его на экран "ёлочкой" */
function create_array($m) // Создание массива случайных чисел 
{
    for ($i = 0; $i < $m; $i++) {
        $arr[$i] = rand(); 
    }
    return $arr;
}
function printer_tree($tree) // Вывод массива "ёлочкой"
{
    $n = 1; // Длина предыдущей строки
    $k = 0; // Длина печатаемой строки
    $i = 0; // 
    while ($i < count($tree)) {
        for ($k = 0; $k < $n; $k++) { // Цикл for предпочтителен для печати, индекс - длина печатаемой строки
            if ($i < count($tree)) { // Но в случае окончания массива раньше окончания строки, печать нужно прервать оператором break
                echo $tree[$i], " ";
                $i++;
            }
            else {
                break;
            }
        }
        echo "<br>";
        $n++;
    }
}
$result = create_array(38);
foreach ($result as $v) {
    echo $v, " ";
}
echo "<p>";
printer_tree($result);

