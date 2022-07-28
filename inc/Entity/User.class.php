<?php

class User {
    private $id;
    private $full_name;
    private $username;
    private $email;
    private $user_role;
    private $password;

    public function verifyPassword(string $passwordToVerify) {
        return password_verify($passwordToVerify, $this->password);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of full_name
     */ 
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

  

    /**
     * Get the value of user_role
     */ 
    public function getUser_role()
    {
        return $this->user_role;
    }
}


?>