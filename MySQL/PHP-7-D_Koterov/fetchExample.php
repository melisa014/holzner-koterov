<!DOCTIPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>
            PDO Котеров
        </title>
    </head>
    <body>    
        <?php
        require_once ('connect_db.php');
        
        $chose_db = $pdo->query ("use db"); //выбираем для работы базу данных db

//Параметризация запросов с помощью подготовки prepare(с параметрами) и задания этих параметров execute
        
        //Это нерабочий вариант
        try {
            $query = "select*
                    from users
                    where name = :name";  
            $user = $pdo->prepare($query);  
            $user->execute(['name' => 'Кирилл']); 
            echo $user->fetch()['user_id'], " - ", $user->fetch()['name']; 
        } catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage();
        }
        
        echo "<p>";
        
        // Это рабочий вариант с циклом
        try {
            $query = "select*
                    from users
                    where name = :name";  
            $user = $pdo->prepare($query);  
            $user->execute(['name' => 'Кирилл']); 
            while ($us = $user->fetch()) {
                echo $us['user_id'], " - ", $us['name'];
            }
        } catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage();
        }

