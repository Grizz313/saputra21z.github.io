<?php
class User extends Connection {
    public $name;

    public $email;

    public $phone_number;

    public $gender;

    public $role;
    
    public function __construct()
    {
         $this->connect();
    }

    public function getUsers()
    {
        $query = $this->connect->query("SELECT * FROM `users`");
        $users = array();
        while ($edit = $query->fetchObject(__CLASS__)) {

            $users[] = $edit;
        }
        return $users;
    }

    public function getEdit($id)
    {
        $query = $this->connect->query("SELECT * FROM `users` WHERE id = '$id'");
        return $query->fetchObject(__CLASS__);
    }

    public function getdelete($id)
    {
        $query = $this->connect->query("SELECT * FROM `users` WHERE id = '$id'");
        return $query->fetchObject(__CLASS__);
    }

    


    public function create($data)
    {
        $sql = "INSERT INTO `users`";
        $sql .= " ( `name`, `email`, `phone_number`, `gender`, `role`)";
        $sql .= "VALUE ( :name, :email, :phone_number, :gender, :role)";


        $query = $this->connect->prepare($sql);

        return $query->execute($data);
    }

    public function edit($data, $id)
    {
        $sql = "UPDATE `users`  SET name=:name, email=:email, phone_number=:phone_number, gender=:gender, role=:role WHERE id='$id'";

        $query = $this->connect->prepare($sql);

        return $query->execute($data);
    }
   
    public function delete( $id)
    {
        $sql = "DELETE  FROM  `users` WHERE id='$id'";
        
        $query = $this->connect->prepare($sql);

        return $query->execute();
    }
   
    

   


    

}