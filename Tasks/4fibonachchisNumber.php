<?php
/* Вывести на экран n-ное число Фибоначчи*/
function fibonachi ($n) {
    $a = 0;
    $b = 1;
    if ($n == 1) {
        echo $a, "<br>";
        echo "$n -ый член последовательности: ", $a, "<br>";
    }
    elseif ($n == 2) {
        echo $a, " ", $b, "<br>";
        echo "$n -ой член последовательности: ", $b, "<br>";
    }
    elseif ($n > 2) {
        echo $a, " ", $b, " "; 
        for ($i = 0; $i+2 < $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            echo $c, " ";
        }    
        echo "<br> $n -й член последовательности: ", $c;     
    }
    
}
fibonachi (8);
    








