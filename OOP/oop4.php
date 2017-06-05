<!DOCTIPE html>
<html>
     
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> ООП. Наследование </title> 
    </head>
    <body> 
        <?php
        require_once 'oop4FileLogger.php'; //Операции с базовым классом
        
        $jor = new FileLogger("ВарвАры на базАре", $_SERVER['DOCUMENT_ROOT'] . '/OOP/complex.txt');
        $str = "Маньк, а Маньк? Почём нынче картопля?";
        $str_unswer = "Неужли не знаешь? Энто смотря кто спрашивает!";                
        $jor->log($str);
        $jor->log($str_unswer);
        echo "Записаны строки:<br>", $str, "<br>", $str_unswer, "<br>";
        
        require_once 'oop4FileLoggerDebug.php'; // Операции с "псевдо" подклассом (без механизма наследования)
        
        $new_jor = new FileLoggerDebug("Вумные ВарвАры", $_SERVER['DOCUMENT_ROOT'] . '/OOP/complex.txt');
        $new_jor->log("Паралллелепипед пестицидов");
        $new_jor->debug("Каков спрос, таков и Барбос!");
        
        // $new_jor->croak($new_jor, "А чёй-то вы тута делаете?");
        
        require_once 'oop4FileLoggerExtended.php'; // Операции с подклассом, всем наследование!
                
        $ext_jor = new FileLoggerExtended($_SERVER['DOCUMENT_ROOT'] . '/OOP/complex.txt');
        $ext_jor->log("Погляди, Нюрка вроде на тваво Ваньку глаз положила... ");
        $ext_jor->debug("Сарай чужой, а срам-то чей?");
       //  $ext_jor->croak($ext_jor, "Сама корова рябая!");
        
        FileLoggerExtended::test();
        
        $ext_jor->ah(); // использование метода подключенного интерфейса
        $ext_jor->winterIsComming(); // использование метода, описанного в используемом трейте
        
        //set_error_handler("MyFunctionErrorHandler", E_ALL); // подключение пользовательской ф-ции перехвата ошибок
        //set_error_handler("FileLoggerExtended::MyFunctionErrorHandler", E_ALL); // подключение пользовательской ф-ции перехвата ошибок
        
        
        set_error_handler(array($ext_jor,"MyFunctionErrorHandler"), E_ALL); // подключение пользовательской ф-ции перехвата ошибок
        /*@*/fopen('nechto.php'); // отключение ошибки при попытке загрузить несуществующий файл
           
        ?>
    </body>
</html>

          



