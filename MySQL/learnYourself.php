<?php

require_once ('connect_db.php');

$pdo->query("use db");

// 1) выборка значений таблицы с сортировкой по алфавиту
$user = $pdo->query("select*from users order by name"); 
while ($us = $user->fetch()) {
    echo $us['user_id'], " - ", $us['name'], "<br>";
}

echo "<br>";
                
$user = $pdo->query("select user_id from users order by name"); 
while ($us = $user->fetch()) {
    echo $us['user_id'], "<br>";
}

echo "<br>";

$user = $pdo->query("select*from users order by name desc"); // по убыванию
while ($us = $user->fetch()) {
    echo $us['user_id'], " - ", $us['name'], "<br>";
}

echo "<br>";

// 2) Вывод сортированных данных плюс выборка по строкам WHERE

$user = $pdo->query("select*from users WHERE user_id > 10 ORDER BY name DESC"); 
while ($us = $user->fetch()) {
    echo $us['user_id'], " - ", $us['name'], "<br>";
}

echo "<br>";