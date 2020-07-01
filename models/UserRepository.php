<?php
include_once 'DBConnection.php';
include_once 'User.php';
class UserRepository{
    private $connection;
    private $useri;

public function __construct(Useri $user){
    $this->useri=$user;
    $conn=new dataBaseConnection();
    $this->connection=$conn->startConnection();
}

public function create(){
    $sql="INSERT INTO Useri (username,pw,email,role) Values (:username,:passw,:email,:roli)";

     $usern = $this->useri->getUsername();
     $pass = $this->useri->getPassword();
     $mail = $this->useri->getEmail();
     $role = $this->useri->getRoli();
 
    $statement = $this->connection->prepare($sql);
  

    $statement->bindParam(":username",$usern);
    $statement->bindParam(":passw",$pass);
    $statement->bindParam(":email",$mail);
    $statement->bindParam(":roli",$role);
    
    $statement->execute();
}

public function getUsers(){
    
}

}