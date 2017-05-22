<html>
     
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> ООП </title> 
    </head>
    <body> 
        <?php
        
        // 1) Создаём комплексные числа (св-ва, методы, конструктор)
        
    /*    require_once 'oop3Class.php';
          
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
        echo $str_com, "<p>";*/
                
        // 2) Запишем их в файл журнала
        
        require_once 'oop3FileLogger.php';
        
        $jor = new FileLogger("Комплексные числа", 'C:/OpenServer/domains/testsite/OOP/complex.txt');
        $jor->log("строка строка строка");
                       
        ?>
    </body>
</html>


