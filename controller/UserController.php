<?php
include_once '../models/User.php';
include_once '../models/UserRepository.php';
class userController{
    


    public function createUser($username,$password,$email,$role){

        $user=new Useri($username,$password,$email,$role);
        $userRepository = new UserRepository();
        $userRepository->create($user);

    }

    
    public function getUsers(){

        
        $userRepository = new UserRepository();
        $userRepository->getUsers();

    }


    public function checkUser($username,$password){

        
        $userRepository = new UserRepository();
        $userRepository->checkUser($username,$password);

    }



    public function  userExist($username){

        
        $userRepository = new UserRepository();
        $userRepository-> userExist($username);

    }
}