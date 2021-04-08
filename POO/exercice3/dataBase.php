<?php
class DataBase{
    //attributs nécessaire pour la connexion 
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "user";

    protected function connect(){
        
        try{
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $connect = new PDO($dsn,$this->username,$this->password);
            $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($connect)
            {
                return $connect;
            }
        }catch(Exception $e){

            die('error : '.$e->getMessage());
        }
    }
}


?>