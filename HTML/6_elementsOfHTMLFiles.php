<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Экспериментальный HTML (продолжение)
        </title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" action="7_phpFile.php">
            <b> 1) Загрузка файла </b><br><br>
            Выберите файл для загрузки:
            <input name="userfile" type="file"<br><br>
            <input type="submit" value="Загрузить"><br><br>  
        </form>
        <form name="form222" method="post" action="8_phpbutton.php">
            <br><br><b> 2) Кнопки: вариант 1 </b><br><br>
            <input type="hidden" name="Button">
            <input type="button" value="Кнопка 1" onclick="button1()">
            <input type="button" value="Кнопка 2" onclick="button2()"><br><br>
        </form>
        <script type="text/javascript">
            function button1()
            {
                document.form222.Button.value="Кнопка 1"
                form222.submit()
            }
            function button2()
            {
                document.form222.Button.value="Кнопка 2"
                form222.submit()
            }
        </script>
        <br><br> <b> 3) Кнопки: вариант 2 </b><br><br>
        <FORM NAME="form1" ACTION="8_phpbutton.php" METHOD="POST">
            <INPUT TYPE="HIDDEN" NAME="Button" VALUE="Кнопочка1">
            <INPUT TYPE="SUBMIT" VALUE="Кнопочка1">
        </FORM>
        <FORM NAME="form2" ACTION="8_phpbutton.php" METHOD="POST">
            <INPUT TYPE="HIDDEN" NAME="Button" VALUE="Кнопочка2">
            <INPUT TYPE="SUBMIT" VALUE="Кнопочка2">
        </FORM>
        <br><br> <b> 4) Кнопки: вариант 3 </b><br><br>
        <FORM NAME="form1" ACTION="8_phpbutton.php" METHOD="POST">
            <INPUT TYPE="SUBMIT"  NAME="Button" VALUE="Кнопушка 1">
        </FORM>
        <FORM NAME="form2" ACTION="8_phpbutton.php" METHOD="POST">
            <INPUT TYPE="SUBMIT" NAME="Button" VALUE="Кнопушка 2">
        </FORM>
    </body>
</html>



