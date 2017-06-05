<?php
try {
    $pdo = new PDO (
            "mysql:host=",
            "root",
            "",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} 
catch (PDOException $ex) {
    echo "Невозможно установить соединение", $ex->getMessage();
}

/*[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]*/