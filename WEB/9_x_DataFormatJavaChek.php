<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Проверка формата даты с помощью JS
        </title>
        </head>
    <body>
        <script type="text/javascript">
            function checker()
            {
                var regExp1 = /(\d{1,2})-(\d{1,2})-(\d{2})$/
                var regExp2 = /(\d{1,2})-(\d{1,2})-(\d{4})$/
                var result1 = document.form1.date1.value.match(regExp1)
                var result2 = document.form1.date1.value.match(regExp2)
                if (result1 == null && result2 == null) {
                    alert("Дата введена неверно. Корректный формат: ДД-ММ-ГГ или ДД-ММ-ГГГГ")
                    document.form1.date1.value = ""
                    return false
                }
                else {
                    document.form1.submit()
                }
            }
        </script>
        <form name="form1" method="post" onsubmit="return checker()">
            Введите дату <br>
            <input type="text" name="date1">
            <input type="submit" value="ok">
        </form>
    </body>
</html>

