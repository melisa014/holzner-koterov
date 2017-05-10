<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Обработка списка
        </title>
    </head>
    <body>
        <center>
            <h2> Территориальные вопросы </h2><br><br>       
        </center>
            <?php
            echo "Кадидат согласен на всё, но предпочтёт районы: <br>"; 
            foreach ($_REQUEST["areas"] as $value) {
                echo $value, "<br>";
            }
            ?>
    </body>
</html>



