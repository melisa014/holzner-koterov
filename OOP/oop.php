<html>
     
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> ООП </title> 
   
 
</head>
 
<body>

<h1> Привет ;)</h1>


<?php
/* Упражнения в ООП. Классы. Объекты. Свойства. Методы. */
class Animal
{
    var $name;
    
    protected function set_name($text)  // Защищённый метод
    {                                  // Присваивает значение переменной name
        if (mb_strlen($text) < 20) {
            $this -> name = $text;
        }
    }
    function get_name()  // Возвращает значение name
    {
        return $this -> name;
    }
}
class Lion extends Animal
{
    function roar()
    {
        echo $this->name, " рычит! <br>";
    }
    function __construct($text)  // Присваивает значение переменной name
    {
        $this->set_name($text);   
    }
    function set_name($text)
    {
        Animal::set_name (strtoupper($text)); //преобразует строчные буквы в прописные (только на английском)
    }
}
$mounkey = new Animal;  // Объект класса Animal
$lion = new Lion ("Геннадий"); // Объект класса Lion
echo "Имя льва: ", $lion -> get_name(), "<br>";
echo "Имя льва напрямую из свойства: ", $lion -> name, "<p>";
$lion -> roar();
$lion -> set_name("justin");
$lion -> roar();

echo mb_strlen('привет', 'UTF8'); // оценка длины строки с учеом кодировки
echo ('<br>Encoding: ' . mb_internal_encoding() ); // определим кодировку по умолчанию


?>

       
</body>
</html>
