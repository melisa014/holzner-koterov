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
              
    /* Здесь тестовые тесты
        $query = "show databases"; // показать все БД 
        $db = $pdo->query($query);
        $bases = $db->fetchAll();
        print_r ($bases);
        echo "<p>";
        
        $query = "select version ()"; // query - переменная, содержащая строку SQL-запроса
        $ver = $pdo->query($query); // ver - переменная, в которую сохраняется объект, возвращаемый методом query
        $version= $ver->fetchAll(); // version - переменная, в которую сохраняется результат метода fetch(строка объекта $version)
        print_r ($version);
        echo "<p>";
        
        $chose_db = $pdo->query ("use db"); //выбираем для работы базу данных db
        
        $tables = $pdo->query("show tables"); //показать все таблицы выбранной БД
        print_r($tables->fetchAll()); // распечатка результата предыдущего запроса
        echo "<p>";
                
        $delete = $pdo->query("drop table users"); Удаление таблицы users
        print_r($pdo->query("show tables")->fetchAll()); //распечатка: какие теперь таблицы у нас есть в БД db
        echo "<p>";
    */
    /* Дальше код из Д.Котерова PHP-7*/
        
        $chose_db = $pdo->query ("use db"); //выбираем для работы базу данных db
        
    /*  создание таблицы с пом. метода exec (возвращает количество 
                                     затронутых в ходе его выполнения записей)
        $query = "create table users(  
            user_id int(11) auto_increment,
            name tinytext not null, 
            primary key (user_id))";
        $count = $pdo->exec($query);
        if ($count !==false) {
            echo "Таблица успешно создана! <br>";
            echo "<p>";
        }
        else {
            echo "Таблицу создать не удалось <br>";
            print_r ($pdo->errorInfo());
            echo "<p>";
        } 
    */    
        
        try {
            $table = $pdo->query("shower tables");  //Здесь есть ошибка в аргументе метода для иллюстрации Исключения
            print_r ($table->fetchAll());
            echo "<p>";
        }
        catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage(), "<p>";
        }
        echo "Я всё ещё жив  !!!! <p>"; //проверка работы кода после пойманного исключения
    
        
    /* Добавление строки в таблицу users
        $user="insert into users (name) values ('Марк')"; 
        $pdo->query($user); //добавить в users строку 
        $users_table = $pdo->query("select*from users"); //показать все данные таблицы users (запрос в MySQL)
        print_r ($users_table->fetchAll());  //вывод на экран запроса из MySQL
    */    
      
    /* Удаление строк из таблицы users 
        $del = "delete from users where name in ('Егор')";
        $delete = $pdo->query($del);
        print_r ($pdo->query("select*from users")->fetchAll());
    */
        
    /* Красивое ВЫБОРОЧНОЕ извлечение данный в окне браузера
        $pr = $pdo->query("select*from users where user_id>9");
        try {
            while ($us = $pr->fetch()) {
                echo $us['user_id'], "-", $us['name'], "<br>";
            }
        }
        catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage();
        }
    */
        
    /*Параметризация запросов с помощью подготовки prepsre(с параметрами) и задания этих параметров execute
        try {
            $query = "select*
                    from users
                    where name = :name";  //Здесь изменяемый параметр задаётся с помощью ПСЕВДОПЕРЕМЕННОЙ :name
            $user = $pdo->prepare($query);  
            $user->execute(['name' => 'Кирилл']); //Здесь псевдопеременной задаётся конкретное значение, и выбранные данные помещаются в виде объекта PDOStatement в $user
            print_r ($user->fetchAll(PDO::FETCH_ASSOC)); // Аргумент метода fetch здесь определяет параметр возвращения массива (только ассоциативные индексы)
        } catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage();
        }
    */             
    //Параметризация запросов с помощью подготовки prepsre(с параметрами) и задания этих параметров execute
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
        
        