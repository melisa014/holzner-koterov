<?php
/* Задать двумерный массив размерностью m на n (MxN) элементов (m и n вынести 
 * в область определения констант), заполнить его случайными значениями и 
 * вывести их на экран уже после того, как весь массив будет заполнен (т.е. 
 * заполнять и выводить в разных группах циклов) */
function double_array($double) //Создание двумерного массива
{
    define ("M", 5);
    define ("N", 2);
    for ($i1 = 0; $i1 < M; $i1++) {  
        for ($i2 = 0; $i2 < N; $i2++) {
            $double[$i1][$i2] = rand() ;
        }
    }
    return $double;
}
function printer($array) // Вывод на экран двумерного массива
{
    foreach ($array as $k1 => $single) { 
        foreach ($single as $k2 => $value) {
            echo "Элемент[$k1][$k2] = ", $value, "<br>" ;
        }
        echo "<br>" ;
    }
}
$result = array() ;
printer(double_array($result)) ; // Вызов функций
