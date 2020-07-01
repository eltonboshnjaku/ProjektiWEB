<?php
include_once '../controller/UserController.php';

$loginUsernameError=$loginPasswordError=$registerEmailError=$registerUsernameError=$registerPasswordError=$registerSuccess="";
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


    //header('location:home.html');
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
      $registerEmail=$_POST['email'];
      $registerUsername=$_POST['username'];
      $registerPassword=$_POST['password'];
      
      create( $registerEmail,$registerUsername,$registerPassword);
      $registerSuccess='Your registration was successful!';

      $registerEmail='';
      $registerUsername='';
      $registerPassword='';
    }
  }

  
  
}

function create($email,$username,$password){
  $role='user';
  
  $usercontroller = new userController();
  $usercontroller->createUser($username,$password,$email,$role);

  
}





?>

