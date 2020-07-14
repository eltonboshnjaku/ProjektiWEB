<?php
include_once 'DBConnection.php';
include_once 'User.php';
class UserRepository{
    private $connection;
    private $useri;

public function __construct(){
    
    $conn=new dataBaseConnection();
    $this->connection=$conn->startConnection();
}

public function create(Useri $user){
    $this->useri=$user;

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
   
     $sql="SELECT * FROM Useri";
    $stmt = $this->connection->query($sql);

     echo 
     '<table width="100%" border="1" style="color:rgb(241, 166, 4); " >
     <tr>
     <th style="background:rgb(34, 33, 33);">ID:</th>
     <th style="background:rgb(34, 33, 33);">USERNAME:</th>
     <th style="background:rgb(34, 33, 33);">PASSWORD:</th>
     <th style="background:rgb(34, 33, 33);">EMAIL:</th>
     <th style="background:rgb(34, 33, 33);">ROLE:</th>
     </tr>';

     foreach($stmt as $row){
         echo '
         <tr>
         <td style="background:white; text-align: center; color:black;">'.$row['id'].'</td>
         <td style="background:white; text-align: center; color:black;">'.$row['username'].'</td>
         <td style="background:white; text-align: center; color:black;">'.$row['pw'].'</td>
         <td style="background:white; text-align: center; color:black;">'.$row['email'].'</td>
         <td style="background:white; text-align: center; color:black;">'.$row['role'].'</td>


         </tr>';
     }
 echo '</table>';

 }

 


// public function userExist( $username){
   

//     $sql="SELECT * FROM Useri WHERE username=:username ";
//     $stmt = $this->connection->prepare($sql);
    
 
//      $stmt->execute(
//          array(
//              'username' => $username
            
//        )
//          );
//         $count = $stmt->rowCount();
//         if($count > 0){
//             return true;
//         }else{
//             return false;
//         }
// }


//  public function isRegistered($usern,$pw){
//      $conn=new dataBaseConnection();
//      $connection=$conn->startConnection();
//     $sql="SELECT * FROM Useri";
//       $stmt = $connection->query($sql);
//       foreach($stmt as $row){
//         $id= $row['id'];
//         $username=$row['username'];
//         $password=$row['pw'];
//         $email=$row['email'];
//         $role=$row['role'];
//         $user= new Useri($username,$password,$email,$role);
//         if($usern == $user->getUsername() && $pw==$user->getPassword()){
//           return true;
//           break;
//         }else{
//           return false;
//           break;
//         }

       

//      }
 }


    









