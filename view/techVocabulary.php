<?php
include_once '../controller/VocabularyController.php';
include_once 'insertWord.php';
include_once 'autocomplete.php';
//session_start();

include_once 'registerUsers.php';

if(empty($_SESSION['loggedin'])){
  header('location:login.php');
}

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

<div class="background">
        
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
                <li><a class="bar_item" href="logout.php">Log Out</a>
                
 
            </ul>
             </div>
    





<img id="vocabPht" src="../photos/vocaBack.jpg" alt="">


<div  class="searchPart">

        
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" id="search"    name="searchField" placeholder="  write here..." autocomplete="off">
    <input type="submit" id="searchButton"  readonly value="search" name="searchButton">
</form>





<h1 class="searchTitle" >TECHOPEDIA</h1>
</div>
<div class="alertPart">
<span style="color:red;"><?=$searchFieldError?></span>
<span style="color:red;"><?=$null?></span>
</div>

<!-- <div style="border:1px solid red; width:40vw;" class="autocomplete">
   <?php
  echo autocomplete();
  ?> 

</div> -->


<div class="resultPart" style="position:absolute;">


     <h3 style="color: red; " class="hide" id="alertText"></h3>
    
    <h1 style="font-family:arial; margin-top:3vh; margin-bottom:3vh; margin-left:5vw; font-size:6vh;"><?=$correctWord?></h1>
    <p style="font-family:arial; font-size:3vh; width:80vw; margin-left:5vw;"><?=$correctDescription?></p>
</div>



</div>

        


    
        
</body>
</html>