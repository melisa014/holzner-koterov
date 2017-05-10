<?php
/*Дано некоторое число длиной от 1 до 5 символов, вывести все его "нечётные" 
цифры в обратном порядке (аналогично предыдущей задаче), если же таких цифр не 
найдёт, вывести сообщение "Нечетных цифр не обнаружено!"*/
function transformation ($a)
{
    echo $a, " : <br>";
    $a_array = str_split ($a);
    $reversed_array = array_reverse ($a_array);
    $score = 0;
    foreach ($reversed_array as $k => $value) {
        if ($value%2 !== 0) {
            echo $value, "<br>";
        }
        else {
            $score++;
        }
    }
    if ($score == count ($reversed_array)) {
        echo "Нечетных цифр не обнаружено!";
    }
}
transformation(5572);

