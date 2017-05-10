<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Организация полей формы в массив
        </title>
    </head>
    <body>
        <?php
        $text = $_REQUEST["textdata"];
        echo "Ваше имя: ", $text["name"], "<br>";
        echo "Ваш любимый цвет: ", $text["color"], "<br>";
        ?>
    </body>
</html>

