
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
             include 'PDOBasedClass.php';
            
            $dbo = new DBO();
            $dbo->tryConnect();
//            $db->tryConnect();
        
        
        $bdFullName = 'mysql:host=localhost;dbname=db';
        $user =  'root';
        $pass = '';
        $db = new PDO($bdFullName, $user, $pass);
        
        
        
        try {
            $dbo->createTable();
        } catch (Exception $e) {
            echo 'Ошибочка вышла: ' . $e->getMessage();
        } catch (PDOException $e) {
            echo '!!!';
        }
        // print_r($db);
         
         
        ?>
    </body>
</html>

