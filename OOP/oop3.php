<html>
     
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> ООП </title> 
    </head>
    <body> 
        <?php
        
         require_once 'oop3Class.php';
         
        // 1) Печатаем заголовок с помощью константы класса
        
        MyClass::printTitle();
        if(defined(MyClass::NAME)) {
            echo "(Константа определена) <p>";
        }
        else {
            echo "(Константа не определена) <p>";
        }
        /*        
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
                
        // 3) Запишем их в файл журнала
        
        require_once 'oop3FileLogger.php';
        
        $jor = new FileLogger("Комплексные числа", $_SERVER['DOCUMENT_ROOT'] . '/OOP/complex.txt');
        $jor->log($str_com);
        $jor->log($str_obj);
        
        // 4) Неявное объявление свойства класса
        $key = "test";  
        $jor->$key = 18;
        print_r ($jor->test);
        echo "<p>";
        
        // 5) 
        */
        
        
        
        
        ?>
    </body>
</html>


