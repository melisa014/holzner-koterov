<?php
/* Упражнения в ООП. Работа с файлами */
echo "Универсальное представление конца строки: PHP_EOL <p>"; 

echo "fgets - построчное чтение <br>";
$handle = fopen ("c:OpenServer/domains/testsite/file.txt", "r");
while (!feof($handle)) {
    $text = fgets($handle);
    echo $text, "<br>";
    }
echo "<br>";
fclose ($handle);

echo "fgetc - посимвольное чтение <br>";
$handle = fopen ("c:OpenServer/domains/testsite/file.txt", "rb");
while ($char = fgetc($handle)) {
    if ($char == "\n") {
        $char = "<br>";
    }
    echo $char;
}
echo "<p>";
fclose ($handle);

echo "fread - побайтовое чтение <br>";
$handle = fopen("c:OpenServer/domains/testsite/file.txt", "rb");
$text = fread($handle, filesize("c:OpenServer/domains/testsite/file.txt"));
$br_text = str_replace("\n", "<br>", $text);
echo $text, "<br>";
echo $br_text;
echo "<p>";

echo "file_get_contents - чтение файла целиком <br>";
$text = file_get_contents("c:OpenServer/domains/testsite/file.txt");
$br_text = str_replace("\n", "<br>", $text);
echo $br_text;
echo "<p>";

echo "fscanf - синтаксический разбор файла <br>";
$handle = fopen("c:OpenServer/domains/testsite/box.txt", "rb");
while ($names = fscanf($handle, "%s \t %s \n")) {
    list($firstname, $lastname) = $names;
    echo $firstname, " ", $lastname, "<br>";
}
fclose($handle);
echo "<p>";

echo "fwrite - запись в файл <br>";
$handle = fopen("c:OpenServer/domains/testsite/box2.txt", "wb");
$text = "Текст здесь есть";
if (fwrite($handle, $text) == false) {
    echo "Ошибка записи файла box2.txt <p>";
}
else {
    echo "Файл box2.txt успешно создан";
}
echo "<p>";

echo "fwrite - также и добавление текста в файл <br>";
$handle = fopen("c:OpenServer/domains/testsite/box.txt", "ab");
$text = "Benjamin   Franklin\n";
if (fwrite($handle, $text) == false) {
    echo "Ошибка изменения файла box.txt <p>";
}
else {
    echo "Файл box.txt успешно изменён";
}
echo "<p>";

echo "file_put_contents - запись файла целиком <br>";
$text = "Здесь что-то важное \n";
if (file_put_contents("newBox.txt", $text) == false) {
    echo "Ошибка создания файла newBox.txt <p>";
}
else {
    echo "Файл newBox.txt успешно создан";
}
echo "<p>";

echo "file_put_contents - запись файла целиком <br>";
$text = "А это приписали вражеские шпионы\n";
if (file_put_contents("newBox.txt", $text, FILE_APPEND) == false) {
    echo "Ошибка изменения файла newBox.txt <p>";
}
else {
    echo "Файл newBox.txt успешно изменён";
}
echo "<p>";




