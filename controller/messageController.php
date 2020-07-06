<?php
include_once '../models/message.php';
include_once '../models/messageRepository.php';

class MessageController{

    public function insertMessage($name,$email,$message){
           $message= new Message($name,$email,$message);
           $messageRepository=new MessageRepository();
           $messageRepository->insertMessage($message);
    }
    
}