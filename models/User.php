<?php
class Useri{
    private $id;
    private  $username;
    private  $password;
    private $email;
    private $roli;

public function __construct($username,$password,$email,$roli){
    
$this->username=$username;
$this->password=$password;
$this->email=$email;
$this->roli=$roli;
}



    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getRoli(){
        return $this->roli;
    }
    public function getId(){
        return $this->id;
    }
    public function setRoli($role){
        $this->roli=$role;
    }
    public function setUsername($uname){
        $this->username=$uname;
    }
    public function setPassword($pass){
        return $this->password=$pass;
    }
    public function setEmail($mail){
        return $this->email=$mail;
    }

    
    public function toString(){
        return $username." - ".$email;
    }
    
}