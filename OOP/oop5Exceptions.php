<?php

// 1) Обычный пример исключения (throw прерывает сценарий)
try { 
    echo "Всё, что имеет начало... <br>";
    throw new Exception ("Hello!");
    echo ".. имеет и конец";
} catch (Exception $ex) {
    echo "Исключение: ", $ex->getMessage(), "<p>";
}

// 2) Раскрутка стека вызовов функций (throw прерывает сценарий, даже когда находится во вложенной ф-ции)
function outer()
{
    echo "Вход во внешнюю функцию <br>";
    inner();
    echo "Выход из внешней функции <br>";
}
function inner()
{
    echo "Вход во внутреннюю функцию <br>";
    throw new Exception("Привет из тела внутренней ф-ции");
    echo "Выход из внутренней функции <br>";
}

try {
    echo "Начало блока try <br>";
    outer();
    echo "Конец блока try <br>";
} catch (Exception $ex) {
    echo "Исключение: <pre>";
    print_r ($ex->getTrace()); // вывод стека ф-ций, исполняемых в момент поимки исключения
    echo "<pre><br>";
}
echo "Конец программы<p>";

// 3) повторная генерация исключения

class HeadshotException extends Exception {}

function action()
{
    try {
        throw new HeadshotException("Выстрел произошёл, вы убиты...");
    } catch (Exception $ex) {
        echo "Передаю исключение для дальнейшей обработки... <br>";
        throw $ex;
    }
}

try {
    action();
} catch (HeadshotException $e) {
    echo $e->getMessage(), "<p>";
}

// 4) Преобразование ошибок(предупреждений E_WARNING и E_NOTICE) в исключения
//require_once("PHP_Exceptionizer.php"); // для преобразования ошибок в исключения необходимо подключить библиотеку PHP_Exceptionizer
//
//function suffer()
//{
//    $w2e = new PHP_Exceptionizer(E_ALL);
//    try {
//        fopen("nechto.php", "r"); // Здесь должно быть предупреждение E_WARNING, тк файл не существует
//    } catch (E_WARNING $ex) {
//        echo "Ошибка перехвачена, мой капитан! ", $ex;
//    }
//}
//
//suffer();
//echo "Вас понял, беру в оборот. <p>";

