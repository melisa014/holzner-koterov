<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Обработка пароля
        </title>
    </head>
    <body>
        <center>
            <h2> Идёт идентификация... </h2><br><br>       
        </center>
            <?php
            $pass = "стратосфера";
            if ($_REQUEST["password"] == $pass) {
                echo "Добро пожаловать!<br>Доступ к защищённой информации получен!";
            }
            else {
                echo "Убирайся, вор!";
            }
            ?>
    </body>
</html>

