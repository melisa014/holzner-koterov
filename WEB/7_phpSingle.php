<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Web-приложение в одном файле
        </title>
    </head>
    <body>
        <?php
        if (isset($_REQUEST["Name"])) {
        ?>
        <b> Отображение введённых данных </b><br><br>
        <?php
        echo "Имя пользователя: ", $_REQUEST["Name"], "<br>";
        }
        else {
        ?>
        <b> Введение данных о пользователе </b><br><br>
        <form method="post">
            Введите своё имя: 
            <input type="text" name="Name"><br><br>
            <input type="submit" value="ok">
        </form>
        <?php
        }
        ?>
    </body>
</html>

