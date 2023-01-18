<?php
// require_once '../libraries/DB.php';

class Admin{

private $db;
public function __construct()
{
    $this->db = new database;
}

//find user by email
public function getUserByEmail($email)
{
    $this->db->query("SELECT * FROM admin WHERE email =:email");
    $this->db->bind(":email",$email);
    $this->db->execute(); 
    $fetch = $this->db->fetch();
    if($this->db->rowCount() > 0){
        return true;
    }else{
        return false;
    }

}
public function login($email, $password)
{
    $this->db->query('SELECT * FROM admin WHERE email = :email');
    $this->db->bind(':email', $email);

    $result = $this->db->fetch();

    if($password ==  $result->password){
        return $result;
    } else{
        return false;
    }
}

public function register($data){
    $this->db->query('INSERT INTO admin (name, email, password) VALUES (:name, :email, :password)');

    // Bind values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->execute();
    // Execute
    if($this->db->execute()){
        return true;
    } else{
        return false;
    }

}
}