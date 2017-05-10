<?php
/*Дано некоторое число длиной от 1 до 5 цифр - вывести его цифры в обратном порядке*/
function transformation ($a)
{
    echo $a, " = <br>";
    $a_array = str_split ($a);
    $reversed_array = array_reverse ($a_array);
    foreach ($reversed_array as $k => $value) {
        echo $reversed_array[$k], "<br>";
    }
}
transformation(8560);
