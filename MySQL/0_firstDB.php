
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
            $connection = mysqli_connect("localhost", "root") // так не ндао делать
           or die ("Ошибка подключения к серверу");
            
            mysqli_query($connection, "create database if not exists db")
                    or   die ("Ошибка создания БД : " . $connection->error);
                    
//                or die ("Ошибка подключения к серверу");
//            $query = mysqli_query($connection, "create database if not exist db")
//                or die ("Ошибка создания БД");
//            $db = mysqli_select_db("db", $connection)
//                or die ("Ошибка выбора базы данных");
//            $table = mysqli_query("create table fruits(name varchar(20), number varchar(20))", $connection)
//                or die ("Ошибка создания таблицы");
//            $result = mysqli_query("select * from fruits")
//                or die ("Ошибка: ".mysql_error());
//            misqli_close($connection);
        ?>
    </body>
</html>

