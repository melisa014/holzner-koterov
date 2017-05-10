<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Определение типа браузера
        </title>
    </head>
    <body>
        <?php
        if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE")) {
            echo "<marquee><h1> Вы используете Internet Explorer </h1></marquee><br>";
            echo $_SERVER["HTTP_USER_AGENT"];
        }
        else {
            echo "<center><h1> Вы используете не Internet Explorer </h1></center><br>";
            echo $_SERVER["HTTP_USER_AGENT"];
        }
        ?>
    </body>
</html>

