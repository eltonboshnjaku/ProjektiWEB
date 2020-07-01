<?php
include_once '../models/User.php';
include_once '../models/UserRepository.php';
class userController{
    


    public function createUser($username,$password,$email,$role){

        $user=new Useri($username,$password,$email,$role);
        $userRepository = new UserRepository($user);
        $userRepository->create();

    }
}