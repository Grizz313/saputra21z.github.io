<?php

class Connection {
    public $hostname = 'localhost' ;
    public $username = 'root' ;
    public $password = '' ;
    public $database = 'crudoop';

    public $connect;
    
    public function connect()
    {
        try {
            $this->connect = new PDO ("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password );
        
            //pengecekan koneksi error atay tidak
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
               
        } catch (PDOException $error) {
            echo "ERROR DATABASE : " . $error;
            die;
        }
    }
}