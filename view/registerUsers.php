<?php
include_once '../models/DBConnection.php';
include_once '../controller/UserController.php';

$loginUsernameError=$loginPasswordError=$loginFailed=$registerEmailError=$registerUsernameError=$registerPasswordError=$registerSuccess="";
$loginUsername=$loginPassword=$registerEmail=$registerUsername=$registerPassword="";

if(isset($_POST['loginButton'])){
  
  if(empty($_POST['usern'])){
      $loginUsernameError='Username is required!';
     
  }else{
    $loginUsername=$_POST['usern'];
  }
  if(empty($_POST['pw'])){
      $loginPasswordError='Password is required!';
  }else{
      
      $loginPassword=$_POST['pw'];
      
  }

 
  if(!empty($_POST['usern']) && !empty($_POST['pw'])){
     $conn=new dataBaseConnection();
     $connection=$conn->startConnection();

      $sql="SELECT * FROM Useri";
      $stmt = $connection->query($sql);

      $rows = "SELECT count(*) FROM Useri"; 
      $result = $connection->prepare($rows); 
      $result->execute(); 
      $number_of_rows = $result->fetchColumn();

      $i=1;
      foreach($stmt as $row){
          
       $id= $row['id'];
       $username=$row['username'];
       $password=$row['pw'];
        $email=$row['email'];
        $role=$row['role'];
        $user= new Useri($username,$password,$email,$role);
       
        if($_POST['usern'] == $user->getUsername() && $_POST['pw']==$user->getPassword()){
          if($user->getRoli() == 'admin'){
           
            header('location:home.html');
          }
          header('location:home.html');
       break;
        }else{
        
          if($i==$number_of_rows){
          
            $loginFailed="Username or Password is incorrect!";
            break;
            }
         
        
      }
      $i++;
     }
  
  
    
  }


  

  
    
  
  
  
}else if(isset($_POST['registerBtn'])){
 
  if(empty($_POST['email'])){
    $registerEmailError='E-mail is required!';
  }else{
    

    if(!preg_match("/[a-zA-Z0-9._-]{1,}@[a-zA-Z-_.]{1,}/",$_POST['email'])){
      $registerEmailError='E-mail is not valid!';
    }else{
      $registerEmail=$_POST['email'];
    }
    
  }
  if(empty($_POST['username'])){
    $registerUsernameError='Username is required!';
  }else{
    $registerUsername=$_POST['username'];
  }
  if(empty($_POST['password'])){
    $registerPasswordError='Password is required!';
  }else{
    

    if(!preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[?!])[a-zA-Z0-9?!]{7,}/",$_POST['password'])){
    $registerPasswordError="Your password must contain at least 7 characters (a-z , A-Z , 0-9 , ? or !).";
    }else{
      $registerPassword=$_POST['password'];
    }
  }
  if(!empty($_POST['email']) && !empty($_POST['username']) &&  !empty($_POST['password'])){
    if(preg_match("/[a-zA-Z0-9._-]{1,}@[a-zA-Z-_.]{1,}/",$_POST['email']) &&
     preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[?!])[a-zA-Z0-9?!]{7,}/",$_POST['password']) ){
    
      $conn=new dataBaseConnection();
      $connection=$conn->startConnection();
 
      $sql="SELECT * FROM Useri";
       $stmt = $connection->query($sql);

       $rows = "SELECT count(*) FROM Useri"; 
       $result = $connection->prepare($rows); 
       $result->execute(); 
       $number_of_rows = $result->fetchColumn();

       $i=1;
       foreach($stmt as $row){
       
           $id= $row['id'];
           $username=$row['username'];
           $password=$row['pw'];
           $email=$row['email'];
           $role=$row['role'];
           $user= new Useri($username,$password,$email,$role);
         if($_POST['username'] == $user->getUsername()){
           $registerUsernameError='Username exist!';
           break;
         }else{
          
         
        if($i==$number_of_rows){

          $registerEmail=$_POST['email'];
          $registerUsername=$_POST['username'];
          $registerPassword=$_POST['password'];
    
          create( $registerEmail,$registerUsername,$registerPassword);
          $registerSuccess='Your registration was successful!';

          $registerEmail='';
          $registerUsername='';
          $registerPassword='';
          $registerSuccess='Your registration was successful!';
          break;
        }

       $i++;
       }
      }
 



   
    }
  }

  
  
}

function create($email,$username,$password){
  $role='user';
  
  $usercontroller = new userController();
  $usercontroller->createUser($username,$password,$email,$role);

  
}






?>

