<?php
include_once '../controller/VocabularyController.php';
include_once 'insertWord.php';

//session_start();

include_once 'registerUsers.php';


$roli=$_SESSION['role'];
if($roli=='user'){
  $hide='hide';
}else{
  $hide="";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="../css/techVocabulary.css">
    <title>Tech Vocabolary</title>
</head>
<body>

    
        
<div class="header" id="header"> 
           
           <div class="title">                         
             <a class="maintitle" href="home.html">Progtut<span class="com">.com</span> </a>             
           </div>
             
             <ul class="bar">
                
                <li ><a class="bar_item" href="home.php">Home</a> </li>
                <li ><a class="bar_item"  href="home.php">Courses</a>
               
               
                 <ul>
                   <li><a class="courseSubMenu" href="htmlCourse.php">HTML</a></li>
                   <li><a class="courseSubMenu"  href="cssCourse.php">CSS</a></li>
                   <li><a class="courseSubMenu" href="">JAVASCRIPT</a></li>
                   <li><a class="courseSubMenu" href="phpCourse.php">PHP</a></li>
                   <li><a class="courseSubMenu" href="javaCourse.php">JAVA</a></li>
                   <li><a class="courseSubMenu" href="">SQL</a></li>
                   
                 </ul>
               
                </li>
              
                <li ><a class="bar_item" href="tutorials.php">Tutorials</a> </li>
                <li ><a class="bar_item" href="techVocabulary.php">Tech Vocabulary</a> </li>
                <li ><a class="bar_item" href="aboutUs.php">About Us</a> </li>
                <li ><a id="admDashboard" class="bar_item <?=$hide?>  " href="adminDashboard.php">Dashboard</a> </li> 
                <li><a class="bar_item" href="login.php">Log Out</a>
                
 
            </ul>
             </div>
    
        <div class="searchPart">

        
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" id="search"    name="searchField" placeholder="write here...">
    <input type="submit" id="searchButton"  readonly value="search" name="searchButton">
</form>


<h2 class="searchTitle" >Over 10,000 tech words meaning</h2>
</div>
<div class="alertPart">
<span style="color:red;"><?=$searchFieldError?></span>
<span style="color:red;"><?=$null?></span>
</div>

<div class="resultPart">


     <h3 style="color: red; " class="hide" id="alertText"></h3>
    
    <h1 style="font-family:arial; margin-bottom:3vh; "><?=$correctWord?></h1>
    <p style="font-family:arial;"><?=$correctDescription?></p>
</div>


    
        
</body>
</html>