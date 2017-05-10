<?php
function create_array($m) // Создание массива случайных чисел 
{
    for ($i = 0; $i < $m; $i++) {
        $arr[$i] = rand(); 
    }
    return $arr;
}
function printer_tree($tree) // Вывод массива "ёлочкой"
{
    $n = 0;
    for ($i = 0; $i <= count($tree); $i++) {
        for ($j = 0; $j <= $n; $j++) {
            echo $tree[$j], " ";
        }
        $tree = array_slice($tree, $j);
        $n++;
        echo "<br>";
    }
}
$result = create_array(7);
foreach ($result as $k => $v) {
    echo $v, " ";
}
echo "<p>";
printer_tree($result);

