<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Обработка скрытого поля
        </title>
    </head>
    <body>
        <center>
            <h2> Техническая информация </h2><br><br>       
        </center>
            <?php
            echo $_REQUEST["hidden"], "<br>"; 
            $text = file_get_contents("C:/OpenServer/domains/testsite/HTML/tecnical.txt");
            echo str_replace("\n", "<br>", $text);        
            ?>
    <a href="https://ru.wikipedia.org/wiki/%D0%A5%D0%B0%D0%BA%D0%B5%D1%80">Ссылка</a>
    </body>
</html>
