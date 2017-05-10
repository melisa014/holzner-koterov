<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Проверка заполнения обязательного поля
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
            if ($_REQUEST["FirstName"] == "") {
                $errors[] = "<font color = 'red'> Имя обязательно для заполнения </font>";
            }
            if ($_REQUEST["LastName"] == "") {
                $errors[] = "<font color = 'red'> Фамилия обязательна для заполнения </font>";
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
            $firstname = isset($_REQUEST["FirstName"]) ? $_REQUEST["FirstName"] : "";
            $lastname = isset($_REQUEST["LastName"]) ? $_REQUEST["LastName"] : "";
            echo "<form method=\"post\">";
            echo "<b> Введите Ваше имя </b><br><br>";
            echo "<input name=\"FirstName\" type=\"text\" value='$firstname'> <br><br>";
            echo "<b> Введите Фамилию </b><br><br>";
            echo "<input name=\"LastName\" type=\"text\" value='$lastname'> <br><br>";
            echo "<input type=\"submit\" value=\"ок\">";
            echo "<input type=\"hidden\" name=\"seen_already\">";
            echo "</form>";
        }
        function process_data()
        {
            echo "Ваше имя: ", $_REQUEST["FirstName"], "<br>";
            echo "Ваша фамилия: ", $_REQUEST["LastName"], "<br>";
        }
        ?>
    </body>
</html>

