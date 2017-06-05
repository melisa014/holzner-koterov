<!DOCTYPE html>
<html>
    <head>
        <title>Список безобразий</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?php
        require_once('connect_db.php');
        
        $chose_db = $pdo->query ("use db");
        
        try {
            $query = "create table news (
                news_id int(11) not null auto_increment,
                name tinytext not null,
                putdata datetime not null,
                primary key (news_id))";
            $pdo->exec($query);
        } catch (Exception $ex) {"Таблица news создана";}
        
        try {
            $query = "create table news_contents (
                content_id int(11) not null auto_increment,
                content text not null,
                news_id int(11) not null,
                primary key (content_id))";
            $pdo->exec($query);
        } catch (Exception $ex) {"Таблица news создана";}
       
        try {
            if (empty($_POST['name'])) {
                exit('Не понятно, что же случилось');
            }
            if (empty($_POST['content'])) {
                exit('Не понятно, кого ловить');
            }
            
            $query = "insert into news values (null, :name, now())";
            $news = $pdo->prepare($query);
            $news->execute(['name' => $_POST['name']]);
            
            $news_id = $pdo->lastInsertId();
            
            $query = "insert into news_contents values (null, :content, :news_id))";
            $news=$pdo->prepare($query);
            $news->execute(['content' => $_POST['content'], ['news_id'] => $news_id]);
            
            header("Location: newsTables.html");         
        } catch (Exception $ex) {
            echo "Ошибка-исключение: ", $ex->getMessage();
        }
        
        ?>
    </body>
</html>


