<?php
include_once '../controller/messageController.php';
include_once '../models/message.php';

$alertText="";
if(isset($_POST["saveButton"])){
    
  if($_POST["emri"]=="" || $_POST["email"]=="" || $_POST["feedback"]==""){
      $alertText="All fields required!";
  }else{
    $name=$_POST["emri"];
    $email=$_POST["email"];
    $message=$_POST["feedback"];

    
    $messageController=new MessageController();
    $messageController->insertMessage($name,$email,$message);
  }
}