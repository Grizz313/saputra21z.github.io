<?php

class Repository extends Connection {

    private $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function getusers()
    {
        $query = $this->connect->query("SELECT * FROM `users`");
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    
   

}