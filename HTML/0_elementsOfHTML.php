<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Экспериментальный HTML
        </title>
    </head>
    <body>
        <center>
            <h1> Пробное тестирование </h1>
            <h2> Основная часть </h2>
            <form method="post" action="1_phpTest.php">
                <b> Введите Ваше имя </b>
                <input name = "Name" type="text"><br><br>
                <b> Перечислите планеты солнечной системы: </b><br>
                <textarea name="planets" cols="50" rows="9">
1.
2.
3.
4.
5.
6.
7.
8.
9.
                </textarea><br><br>
                <b> Ранее Вы изучали другие системы планет? </b><br>
                <input name="check1" type="checkbox" value="yes"> Да
                <input name="check2" type="checkbox" value="no"> Нет
                <br><br>
                <b> Вы готовы продать нам душу? </b><br>
                <input name="rad1" type="radio" value="Вам конец."> Да
                <input name="rad1" type="radio" value="Мы Вам перезвоним!"> Нет
                <br><br>
                <input type="submit" value="OK">
            </form>
            <form method="post" action="2_phpList.php">
                <b> Выберите желаемые районы работы: </b><br><br>
                <select name="areas[]" multiple>
                <option> Советский </option>
                <option> Ленинский</option>
                <option> Центральный</option>
                <option> Коминтерновский</option>
                </select>
                <br><br>
                <input type="submit" value="OK">
            </form>
            <form method="post" action="4_phpPassword.php">
                <b> Для продолжения тестирования Вам необходимо ввести пароль: </b><br><br>
                <input name="password" type="password">
            </form>
            <form method="post" action="5_phpPicture.php">
                <b> Выберите цвет: </b><br><br>
                <input name="img" type="image" width=500 height=250 src="232-300.jpg">                
            </form>
        </center>
    <br><br>
            <form method="post" action="3_phpHidden.php">
                <p align=right>
                <i><b> Нажмите на кнопку для отображения скрытых данных</b></i><br>
                <input name="hidden" type="hidden" value="Раз уж Вы сюда зашли...<br>">
                <input type="submit" value="Информация"></p>
            </form>
        </body>
</html>

