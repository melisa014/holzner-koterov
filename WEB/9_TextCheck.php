<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Проверка наличия регулярного выражения в строке
        </title>
    </head>
    <body>
        <?php
        $errors = array();
        if (isset($_REQUEST["seen_already"])) {
            validate_data();
            if (count($errors) > 0) {
                display_errors();
                display_form();
            }
            else {
                process_data();
            }
        }
        else {
            display_form();
        }
        function validate_data()
        {
            global $errors;
            if (!preg_match('/PHP/', $_REQUEST["Text"])) {
                $errors[] = "<font color = 'red'> Необходимо упомянуть PHP </font>";
            }
        }
        function display_errors()
        {
            global $errors;
            foreach ($errors as $value)
                echo $value, "<br>";
        }
        function display_form() 
        {
            echo "<form method='post'>";
            echo "<b> Какой Ваш любимый язык программирования? </b><br><br>";
            echo "<input name=\"Text\" type=\"text\"> <br><br>";
            echo "<input type=\"submit\" value=\"ок\">";
            echo "<input type=\"hidden\" name=\"seen_already\">";
            echo "</form>";
        }
        function process_data()
        {
            echo "Действительно, ", strip_tags($_REQUEST["Text"]), "<br>";
            echo "Если для Вас важны теги, то ", htmlentities($_REQUEST["Text"]);
        }
        ?>     
    </body>
</html>
