<?php

require_once ('oop4FileLogger.php');

class FileLoggerExtended extends FileLogger implements Interjections// передача методов через наследования классов
{
    use Chukcha
    {
        Chukcha::cold as winterIsComming;
    }
    //Все свойства/поля базового класса наследуются
    public $f; //Открытый файл
    public $name; // Имя журнала
    public $lines = []; //Накапливаемые сроки 
    
    // Методы также наследуются, но можно определить и новые
    public function __construct($fname)
    {
        parent::__construct(basename($fname), $fname); // конструктор подкласса переадресует задачу конструктору базового класса
    }
    
    public function debug($s, $level = 0) // Новый метод класса строку $s, а также файл и №строки, в которой находится код данной записи.
    {                                     // Тот же вывод строки, но для отладки
        $stack = debug_backtrace(); // формирование стека вызовов функций
        $file = basename($stack[$level]['file']);  // обращение к фалу, к которому система обращалась последним с пом. стека $stack
        $line = $stack[$level]['line']; // то же
        $this->log("at {$file} in {$line}: {$s}"); // непосредственно вывод (теперь без посредников)    
    }
    
    public function croak(FileLogger $l, $msg) // При наследовании объект подкласса также относится и к базовому классу
    {                                          // и может использоваться, даже если явно указан тип базового класса FileLogger
        $l->log($msg);
        exit("До свидания!");
    }
    
    public function log($str) //переопределим метод базового класса
    {
        $date = date('Y-m-d');
        $this->lines[] = "$date $this->name $str \n";  // теперь дата и время в другом формате
    }
    
    public static function title() // переопределение статического метода базового класса
    {
        echo __CLASS__;
    }
    
    public function oh() // описание методов подключённого интерфейса
    {
        echo "<p>Ох...<p>";
    }
    public function ah()
    {
        echo "<p>Ах!..<p>";
    }
    public function eh()
    {
        echo "<p>Эх!<p>";
    }
    
    public  function MyFunctionErrorHandler ($errno, $msg, $file, $line) // пользовательская ф-ция перехвата ошибок
    {
        /*if (error_reporting() == 0) {
            return;
        }*/
        echo "Произошла ошибка с кодом: ", $errno, "<br>";
        echo "Файл: ", $file, "в строке: ", $line, "<br>";
        echo "Текст ошибки: ", $msg, "<p>";
    }
    
}
