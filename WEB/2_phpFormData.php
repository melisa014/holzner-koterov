<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Отображение данных, введённых в форму
        </title>
    </head>
    <body>
        Вот, что было введено в форму <br><br>
        <?php
        foreach ($_REQUEST as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    echo $key, "=>", $item, "<br>";
                }
            }
            else {
                echo $key, "=>", $value, "<br>";
            }
        }
        ?>
    </body>
</html>



