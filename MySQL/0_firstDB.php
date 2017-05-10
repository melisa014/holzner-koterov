
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Первая база данных
        </title>
    </head>
    <body>
        <?php
            $connection = mysqli_connect("localhost") // так не ндао делать
                or die ("Ошибка подключения к серверу");
            $db = mysqli_select_db("db", $connection)
                or die ("Ошибка выбора базы данных");
            $result = mysqli_query("select * from fruits")
                or die ("Ошибка: ".mysql_error());                    
        ?>
    </body>
</html>

