<?php
include_once '../models/User.php';
include_once '../models/UserRepository.php';
class userController{
    


    public function createUser($username,$password,$email,$role){

        $user=new Useri($username,$password,$email,$role);
        $userRepository = new UserRepository();
        $userRepository->create($user);

    }

    
    // public function  userExist($username){

        
    //     $userRepository = new UserRepository();
    //   return  $userRepository->userExist($username);

    // }

    // public function isRegistered($usern,$pw){
    //     $userRepository = new UserRepository();
    //     return $userRepository->isRegistered($usern,$pw);
        
    // }
}