<?php

require_once ('oop4FileLogger.php');

class FileLoggerDebug // передача методов без наследования классов
{
    public $logger; // объект класса FileLogger
    
    public function __construct($name, $fname)
    {
        $this->logger = new FileLogger($name, $fname); // св-ву logger присваивается значение объекта класса FileLogger
    }
    
    public function debug($s, $level = 0) // Новый метод класса строку $s, а также файл и №строки, в которой находится код данной записи.
    {                                     // Тот же вывод строки, но для отладки
        $stack = debug_backtrace(); // формирование стека вызовов функций
        $file = basename($stack[$level]['file']);  // обращение к фалу, к которому система обращалась последним с пом. стека $stack
        $line = $stack[$level]['line']; // то же
        $this->logger->log("at {$file} in {$line}: {$s}"); // непосредственно вывод    
    }
    
    public function log($s) // Воссоздаём метод log(), создавая метод-посредник 
    {
        return $this->logger->log($s);
    }
    
    public function croak($l, $msg) // Если бы для аргумента был бы явно указан класс FileLogger, програма бы выдала ошибку. (FileLogger $l, $msg)
    {                               // При наследовании объект подкласса также относится и к базовому классу и мог бы использоваться.
        $l->log($msg);
        exit("До свидания!");
    }
    
}

