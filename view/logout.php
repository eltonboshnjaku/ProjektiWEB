<?php
include_once 'registerUsers.php';

session_destroy();
header('location:login.php');
