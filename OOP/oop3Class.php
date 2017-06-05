<?php

class MyClass
{
    //Здесь описаны свойства/поля класса
    public $re, $im; //действительная и мнимая части числа
    public $password; //пароль
    public $time; //время создания объекта
    const NAME = "Комплексные числа в действии";
    private $vars = array();

    //Дальше описаны методы класса
    
    public static function printTitle() //Печать заголовка, содержащегося в константе класса
    {
        echo self::NAME, "<br>";
    }
    
    // 1) Автоматические перехватчики обращений к несуществующим членам
    public function __get($name) {
        echo "Произошёл перехват. Имя свойства: ", $name, "<br>";
        return (isset($this->vars[$name]) ? $this->vars[$name] : null);
    }
    
    public function __set($name, $value) {
        echo "Произошёл перехват. Установим ", $name, " равным ", $value, "<br>";
        return $this->vars[$name] = $value;
    }
    
    public function __call($name, $arguments) {
        echo "Произошёл прехват. Вызываем ", $name, " с аргументами: <br>";
        var_dump($arguments);
        return $arguments[0];
    }
    
    // 2) Создание комплексных чисел, операции с ними и конструктор
    function __construct($re=0, $im=0)    // Создание комплексного числа
    {
        $this->re = $re;
        $this->im = $im;
        $this->password = strval($re);
        $this->time = time();   
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
    
    // 3) Переопределение клонирования
    
    public function __clone()
    {
        $this->re = $this->re *=10;
    }
    
    // 4) Перехват сериализации
    
    public function __sleep()
    {
        return array('re', 'im', 'time');
    }
    
    public function __wakeup()
    {
        $this->time = time();
    }
}