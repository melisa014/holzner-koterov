<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Аутентификация
        </title>
    </head>
    <body>
        <form method="post" onsubmit="function auth()">
            <b> 1) Введите комментарий </b><br><br>
            <input name="name" type="text"> <br><br>
            <input type="submit" value="ок">
            <?php
            function auth()
            {
                if (!isset($_SERVER["PHP_AUTH_USER"])) {
                    header("WWW-Authenticate: Basic realm = 'workgroup'");
                    header("HTTP/1.0 401 Unauthorized");
                    echo "Неавторизованный доступ запрещён";
                    exit;
                }
                else {
                    echo "Добро пожаловать, ", $_SERVER["PHP_AUTH_USER"];
                }
            }
            ?>
        </form> <br><br>
    </body>
</html>