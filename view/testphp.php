

<?php

include_once '../controller/UserController.php';

$userRepo= new UserRepository();
$userRepo->getUsers();