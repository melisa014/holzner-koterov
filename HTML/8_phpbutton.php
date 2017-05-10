<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Кнопки. Вариант 1.
        </title>
    </head>
    <body>
        <b> Нажата кнопка: </b><br><br>
        <?php
        if (isset($_REQUEST["Button"])) {
            echo $_REQUEST["Button"], "<br>";
        }
        else {
            echo "нет запроса";
        }
        ?>
     </body>
</html>  

