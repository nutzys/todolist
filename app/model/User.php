<?php

class User{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function login($name, $password){
        $this->db->query('SELECT * FROM users WHERE name = :name');
        $this->db->bind(':name', $name);

        $user = $this->db->single();

        if($user->password == $password){
            return $user;
        }else{
            return false;
        }
    }
}