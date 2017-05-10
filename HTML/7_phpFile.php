<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Работа с файлами в HTML
        </title>
    </head>
    <body>
        <b> Отображение файла: </b><br><br>
            <?php
            $text = file_get_contents($_FILES["userfile"]["tmp_name"]);
            echo $text, "<br>";
            echo "Файл успешно загружен на сервер ;) <br>";
            ?>
     </body>
</html>        



