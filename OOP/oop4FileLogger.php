<?php

class FileLogger
{
    //Здесь описаны свойства/поля класса
    public $f; //Открытый файл
    public $name; // Имя журнала
    public $lines = []; //Накапливаемые сроки            

    //Дальше описаны методы класса
    
    public function __construct($name, $fname) 
    {
        echo "Конструктор запустился, файл открыт <br>";
        $this->name = $name; //пользователь указывает имя журнала
        $this->f = fopen($fname, "a+"); //пользователь указывает имя файла, который открывает конструктор для записи
    }
    
    public function __destruct() //Добавляет накопленные в буфере строки в файл, закрывает файл.
    {
        echo "Деструктор запустился, строки записаны <br>";
        fwrite($this->f, join($this->lines));
        fclose($this->f);
    }
        
    public function log($str) //добавляет строку в массив lines, который накапливает в буфере все строки до закрытия программы
    {
        $date = date('d-F-Y H:i:s');
        $this->lines[] = "$date $this->name $str \n";  // сохраняем строку в массив
    }
    
    public static function title()
    {
        echo __CLASS__;
    }
   
    public static function test() // позлнее статическое определение
    {
        static::title();
    }
}

Interface Interjections
{
    public function oh();
    public function ah();
    public function eh();
}

Trait Chukcha
{
    public function Cold()
    {
        echo "<p>Холёдно, однако <p>";
    }
}