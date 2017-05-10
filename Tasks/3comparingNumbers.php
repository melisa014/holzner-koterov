<?php
/* Вывести на экран N случайных чисел (каждое с новой строки) из диапазона 
[-21, 35], но для каждого числа, начиная со второго, рядом выводить - 
больше ли оно предыдущего или меньше*/
$N = 8;
for ($i=0; $i < $N; $i++) {
    $numbers[$i] = rand(-21,35);
    if ($i == 0) {
        echo $numbers[$i], "<br>";
    } 
    else {
        if ($numbers[$i] > $numbers[$i-1]) {
            echo $numbers[$i], " more than ", $numbers[$i-1], "<br>";
        }
        elseif ($numbers[$i] < $numbers[$i-1]) {
            echo $numbers[$i], " less than ", $numbers[$i-1], "<br>";
        }
        elseif ($numbers[$i] == $numbers[$i-1]) {
            echo $numbers[$i], " = ", $numbers[$i-1], "<br>";
        }
           
    }
}

// http://fkn.ktu10.com/?q=node/8773

