<html> 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Обработка текстого поля, галочки и радиокнопки
        </title>
    </head>
    <body>
        <center>
            <h2> Основная часть </h2>        
            <?php /* Это файл, хранящий php-скрипт для HTML-формы */
            echo "Ваше имя: <br><H3><i>", $_POST["Name"], "</i></H3>";  // Текстовое поле
            ?>
        </center>
            <?php
            echo "Знает планеты: <br>", str_replace("\n", "<br>", $_POST["planets"]), "<p>"; // Многострочный текст
            if (isset($_POST["check1"])) {   // CHECKBOX
                echo "Будем работать <p>";
            }
            elseif (isset($_POST["check2"])) { 
                echo "Да тут ещё работать и работать! <p>";
            }
            if (isset($_REQUEST["rad1"])) {   //RADIO BUTTON
                echo $_REQUEST["rad1"], "<p>";
            }
            else {
                echo "Ситуация не решена <p>";
            }
            ?>
    </body>
</html>






