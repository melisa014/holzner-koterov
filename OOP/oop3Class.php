<?php

class MyClass
{
    //Здесь описаны свойства/поля класса
    public $re, $im;

    //Дальше описаны методы класса
    // 1) Создание комплексных чисел, операции с ними и конструктор
    
    function __construct($re=0, $im=0)    // Создание комплексного числа
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add($a, $b)  // Добавление числа к комплексному числу
    {
        $this->re += $a;
        $this->im += $b; 
    }
    
    public function addComplex(MyClass $y) // Сложение двух комплексных чисел
    {
        $this->re += $y->re;
        $this->im += $y->im;
    }
    
    public function printComplex () // Вывод комплексного числа на экран
    {
        echo "Комплексное число: (", $this->re, "+", $this->im, "i) <br>";
    }
    
    public function __toString()
    {
        $string = "$this->re + $this->im i";
        return $string;
    }
}