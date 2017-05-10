<?php
/* Вывести на экран N случайных чисел (каждое с новой строки) из диапазона [-21, 35]*/
$N = 8;
for ($i=0; $i < $N; $i++) {
    $numbers [$i] = rand(-21,35);
    echo "Next number: ", $numbers [$i], "<br>";
}

// http://fkn.ktu10.com/?q=node/8771
