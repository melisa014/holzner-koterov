<!DOCTIPE html>
<html>
     
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> ООП. Объекты и классы </title> 
    </head>
    <body> 
        <?php
        
         require_once 'oop3Class.php';
        
        /*      
        // 1) Печатаем заголовок с помощью константы класса
        
        MyClass::printTitle();
        if(defined("MyClass::NAME")) {
            echo "(Константа определена) <p>";
        }
        else {
            echo "(Константа не определена) <p>";
        } */
              
        // 2) Создаём комплексные числа (св-ва, методы, конструктор)
              
        $obj = new MyClass(13, 48);
        $obj->printComplex();
        $obj->add(-8, -9);
        $obj->printComplex();
        echo "<br>";
        
        $com = new MyClass(1,8);
        $com->printComplex();
        $obj->addComplex($com);
        $obj->printComplex();
        $str_obj = $obj->__toString();
        $str_com = $com->__toString();
        echo $str_com, "<p>";
        
        /*
        // 3) Запишем их в файл журнала
        
        require_once 'oop4FileLogger.php';
        
        $jor = new FileLogger("Комплексные числа", $_SERVER['DOCUMENT_ROOT'] . '/OOP/complex.txt');
        $jor->log($str_com);
        $jor->log($str_obj);
        
        // 4) Неявное объявление свойства класса
        $key = "test";  
        $jor->$key = 18;
        print_r ($jor->test);
        echo "<p>";
        
        // 5) Перехват обращений к несуществующим членам класса
        
        $a = new MyClass;
        $a->nonExistent = 345; //присваеваем значение несуществующему свойству
        echo "Хочу напечатать: ", $a->nonExistent, "<br>"; //вывод на печать "виртуального" св-ва
        echo "Хочу напечатать: ", $a->nonExistent2, "<br>"; //вывод на печать несущ. св-ва
        $a->method(8); //обращение к несущ. методу       
        
         
        // 6) Клонирование объектов
        $object = new MyClass(13, 12);
        $x = new MyClass;
        $y = clone $x;        
        $y->addComplex($object);
        $x->printComplex();
        $y->printComplex();
        
        $z = clone ($y);
        $z->printComplex();
         */
         
        // 7) Сериализация(упаковка) объектов в файл
        echo "Так объект выглядел до упаковки:<br><pre>";
        print_r($com); // так объект выглядел до упаковки
        echo "<pre>";
        
        $save = serialize($com);
        echo "В таком виде упакованный объект хранится в файле:<br>", $save, "<br>";
        file_put_contents('dump.obj', $save);
                 
         
        ?>
    </body>
</html>


