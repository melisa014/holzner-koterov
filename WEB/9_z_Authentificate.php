<?php // Для запуска окна для ввода имени и пароля каждый раз необходимо выходить из системы (закрыть и открыть браузер)
if (!isset($_SERVER["PHP_AUTH_USER"])) {
    header("WWW-Authenticate: Basic realm = 'workgroup'");
    header("HTTP/1.0 401 Unauthorized");
    echo "Неавторизованный доступ запрещён";
    exit;
}
else {
    echo "Добро пожаловать, ", $_SERVER["PHP_AUTH_USER"];
}
?>
