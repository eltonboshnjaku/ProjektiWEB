<?php
include_once 'message.php';
include_once 'DBConnection.php';
class MessageRepository{
    private $connection;
    private $message;

    public function __construct(){
    
        $conn=new dataBaseConnection();
        $this->connection=$conn->startConnection();
    }

    public function insertMessage(Message $message){
        $this->message=$message;
    
        $sql="INSERT INTO message (name,email,message) Values (:name,:email,:message)";
    
         $name = $this->message->getName();
         $email = $this->message->getEmail();
         $message = $this->message->getMessage();
        
     
        $statement = $this->connection->prepare($sql);
      
    
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":message",$message );
        
        $statement->execute();
    }

    public function getMessages(){
   
        $sql="SELECT * FROM message";
       $stmt = $this->connection->query($sql);
   
        echo 
        '<table width="87%" border="1" style="color:rgb(241, 166, 4); margin-top:10vh; margin-left:5vw;" >
        <tr>
        <th style="background:rgb(34, 33, 33);">ID:</th>
        <th style="background:rgb(34, 33, 33);">Name:</th>
        <th style="background:rgb(34, 33, 33);">Email:</th>
        <th style="background:rgb(34, 33, 33);">Message:</th>
        
        </tr>';
   
        foreach($stmt as $row){
            echo '
            <tr>
            <td style="background:white; color:black;">'.$row['id'].'</td>
            <td style="background:white; color:black;">'.$row['name'].'</td>
            <td style="background:white; color:black;">'.$row['email'].'</td>
            <td style="background:white; color:black;">'.$row['message'].'</td>
            
   
   
            </tr>';
        }
    echo '</table>';
   
    }



}