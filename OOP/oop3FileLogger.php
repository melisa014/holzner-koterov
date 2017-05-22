<?php

class FileLogger
{
    //Здесь описаны свойства/поля класса
    public $f; //Открытый файл
    public $name; // Имя журнала
    public $lines = []; //Накапливаемые сроки            


    
    
    public function __construct($name, $fname) {
        echo('constructor is here!'); // проверим запускается ли 
        
        $this->name = $name; //пользователь указывает имя журнала
        $this->f = fopen($fname, "a+"); //пользователь указывает имя файла, который открывает конструктор для записи
    }
    
    public function __consruct($name, $fname) // тут опять опечатка
    {
        echo('-consruct- is here!'); // проверим запускается ли 
        
        $this->name = $name; //пользователь указывает имя журнала
        $this->f = fopen($fname, "a+"); //пользователь указывает имя файла, который открывает конструктор для записи
    }
    
    //Дальше описаны методы класса
    // Запись строк в файл-журнал
    
    public function log($str) //добавляет строку в массив lines, который накапливает в буфере все строки до закрытия программы
    {
        $this->lines[] = $str;  // сохраняем строку в массив
    }
    
    public function __destruct() //Добавляет накопленные в буфере строки в файл, закрывает файл.
    {
        fwrite($this->f, join("", $this->lines));
        fclose($this->f);
    }
   
}

