
<?php
include 'createCourses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/adminDashboard_style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="header" id="header"> 
           
           <div class="title">                         
             <a class="maintitle" href="home.html">Progtut<span class="com">.com</span> </a>             
           </div>
             
            <ul class="bar">
                
                <li ><a class="bar_item" href="home.html">Home</a> </li>
                <li ><a class="bar_item"  href="home.html">Courses</a>
               
               
                 <ul>
                   <li><a class="courseSubMenu" href="htmlCourse.html">HTML</a></li>
                   <li><a class="courseSubMenu"  href="cssCourse.html">CSS</a></li>
                   <li><a class="courseSubMenu" href="">JAVASCRIPT</a></li>
                   <li><a class="courseSubMenu" href="phpCourse.html">PHP</a></li>
                   <li><a class="courseSubMenu" href="">JAVA</a></li>
                   <li><a class="courseSubMenu" href="">SQL</a></li>
                   
                 </ul>
               
                </li>
              
                <li ><a class="bar_item" href="tutorials.html">Tutorials</a> </li>
                <li ><a class="bar_item" href="techVocabulary.html">Tech Vocabulary</a> </li>
                <li ><a class="bar_item" href="aboutUs.html">About Us</a> </li>
                <li><a class="bar_item" href="login.php">Log Out</a>
                
 
            </ul>
         </div>

<div class="adminPanel">


         <div class="menu">
         
          <ul>
              <li id="profile">Profile</li>
              <li onclick="showUsers()" id="users">Users</li>
              <li onclick=" newCourse()" id="newC" >New Course</li>
              <li onclick="newCourse()"id="editCourse">Edit Courses</li>
              <li id="messages">Messages</li>
          </ul>
          


         </div>

<div class="outputPanel" id="outputPanel">
    <div id="usersPanel" class="hide">
    <?php

include_once 'registerUsers.php';
include_once '../models/UserRepository.php';

$userRepo= new UserRepository();
    $userRepo->getUsers();
?>
    </div>
<div class="editCourse" id="editCourse">

</div>




<div id="newCourse" class="newCourse hide">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="formDiv">
    <label for="courseName">Course Name:</label>
    <input type="text" name="courseName" id="cName">
    
    <label for="chapterNumber">Chapter Number:</label>
    <input type="number" name="chapterNumber" id="cNum">
    <label for="courseTitle">Chapter Title:</label>
    <input type="text" name="courseTitle" id="cTitle">
    <label for="courseHeader">Chapter Header:</label>
    <textarea name="courseHeader" id="cHeader" cols="30" rows="10"></textarea>
    
    <label for="courseBody">Chapter Body:</label>
    <textarea name="courseBody" id="cBody" cols="30" rows="10"></textarea>
    <label for="courseBody">Insert Photo:</label>
    <input type="file" name="fileInput" id="fileInput">
    <div class="buttons">
    <input type="submit" value="next chapter" id="nextChapterButton">
    <input type="submit" value="save" id="saveButton" name="saveButton">
    </div>
   
    
    </div>
</form>


</div>



    <div id="profile">
    <?php
    include_once 'registerUsers.php';
    include_once '../models/User.php';

   
   
    ?>
    </div>

</div>






         </div>         
<script src="../js/adminDashboard.js"></script>
</body>
</html>