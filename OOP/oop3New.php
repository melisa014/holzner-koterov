<!DOCTIPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title> Распаковка объекта </title> 
    </head>
    <body> 
        <?php
        require_once 'oop3Class.php';
        
        $text = file_get_contents('dump.obj');
        $com = unserialize($text);
        echo "После распаковки св-во пароль не определено:<br><pre>";
        print_r($com); // вот так теперь выглядит объект: св-во пароль не определено
        echo "<pre>";
        echo "<p>";
        $com->printComplex(); // Вот так - красиво
        
        ?>
    </body>
</html>
    
