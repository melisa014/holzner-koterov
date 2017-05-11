<?php

class DBO // db object
{ 
  
    public $DBHOST = 'localhost'; // укажтие имя БД
    public $DBNAME = 'db'; // укажтие имя БД
    public $DBUSER = 'root' ; // укажие имя пользователя БД
    public $DBPASS = ''; // укажтие пароль для подключения к БД
   
    public $rowcount = 0; 
      
    public $dbc = 0; // connection
 
    /*метод для подключения*/
    public function tryConnect() {
        try {  
            $this->dbc = new PDO("mysql:host=". $this->DBHOST .";dbname=".
                               $this->DBNAME, $this->DBUSER, $this->DBPASS);
            return $this->dbc;
         }
        catch(PDOException $e) {
            $this->printme(' подключиться к MySQL не получилось', 1);
            $this->printme(' проверьте настройки в коде скрипта (поля класса DBO этого скрипта), а также убедитесь что PHP PDO включено | текст ошибки:');
            $this->printme("Error: " . $e->getMessage());
            //  exit(); 
            
            
        }
    }
         
    // создаём таблицу средствами PDO  
    public function createTable(){

        if ($this->dbc) { 
            if ($this->dbc->query("CREATE TABLE IF NOT EXISTS `users` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `name` varchar(30) NOT NULL,
                        `param` int(11) NOT NULL,
                        PRIMARY KEY (`id`)
                        ) Engine=InnoDB DEFAULT CHARSET=utf8;")) {
                            $this->printme('таблица "пользователей" создана');
            } else {
                $this->printme('не получилось создать таблицу');
            }
        } else {
            throw new Exception('Сначала подключись, а потом уже....');
        }
    }

    // обновление строки    
    public function updateRowById($id, $param){

       $stmt = $this->dbc->prepare("UPDATE users SET param=$param  WHERE id=$id LIMIT 1");
       $stmt->execute();
    }

    // извлекаем одну строку
    public function selectRowById($id){
        $stmt = $this->dbc->prepare("SELECT name, param FROM users WHERE id=$id LIMIT 1"); 
        $stmt->execute(); 
        $row = $stmt->fetch();
        //echo($row'< pre>');var_dump($row);echo('< /pre>'); // можно посмотреть что получилось (стуруктуру)
        return ;
    }
    
    private function printme($str)
    {
        echo ('<br>' . $str  . '<br>');
    }
 
}