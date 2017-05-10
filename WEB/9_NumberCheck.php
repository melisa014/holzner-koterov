<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Проверка ввода целого числа
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
            if (strcmp($_REQUEST["Number"], strval(intval($_REQUEST["Number"])))) {
                $errors[] = "<font color = 'red'> Введите целое число </font>";
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
            echo "<b> Введите количество петухов </b><br><br>";
            echo "<input name=\"Number\" type=\"text\"> <br><br>";
            echo "<input type=\"submit\" value=\"ок\">";
            echo "<input type=\"hidden\" name=\"seen_already\">";
            echo "</form>";
        }
        function process_data()
        {
            echo "Количество петухов в курятнике ", $_REQUEST["Number"];
        }
        ?>     
    </body>
</html>
