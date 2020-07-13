
<?php
//session_start();
include_once 'createCourses.php';
include_once 'registerUsers.php';
include_once 'insertWord.php';

$username= $_SESSION['username'];
$password=$_SESSION['password'];
$email=$_SESSION['email'];
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
    <link rel="stylesheet" type="text/css" href="../css/adminDashboard_style.css">
    <title>Dashboard</title>
</head>
<body>

<div class="header" id="header"> 
           
           <div class="title">                         
             <a class="maintitle" href="home.php">Progtut<span class="com">.com</span> </a>             
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
          
         

<div class="adminPanel">


         <div class="menu">
         
          <ul >
              <li id="prf" onclick="showProfile()">Profile</li>
              <li onclick="showUsers()" id="users">Users</li>
              <li id="courses">Courses
            
               <ul id="cList" > 
              <li onclick=" newCourse()" id="newC" >New Course</li>
              <li onclick="editCourse() "id="editC">Edit Courses</li>

               </ul> 
            
            </li>
              
              <li id="tutorials">Tutorials


             <ul id="tList">
                 <li>New Tutorial</li>
                 <li>Edit Tutorial</li>
             </ul>
             </li>
             <li id="messag" onclick="showVocabulary() ">Vocabulary</li> 
              <li id="messag" onclick="showMessages() ">Messages</li> 

              
             
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








<div id="newCourse" class="newCourse  hide">

<?php

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="formDiv">
    <span style="color:red; font-family: 'Courier New' "><?=$alertMessage?></span>

    <label for="courseName">Course Name:</label>
    <input type="text" name="courseName" id="cName" value="<?= $courseName ?>">
    
    <label for="chapterNumber">Chapter Number:</label>
    <input type="number" name="chapterNumber" id="cNum" value="<?= $chapterNumber ?>" >
    <label for="courseTitle">Chapter Title:</label>
    <input type="text" name="courseTitle" id="cTitle" value="<?= $chapterTitle ?>">
    <label for="courseHeader">Chapter Header:</label>
    <textarea name="courseHeader" id="cHeader" cols="30" rows="10" value="<?= $chapterHeader ?>"></textarea >
    
    <label for="courseBody">Chapter Body:</label>
    <textarea name="courseBody" id="cBody" cols="30" rows="10" value="<?= $chapterBody ?>"></textarea>
    <label for="courseBody">Insert Photo:</label>
    <input type="file" name="fileInput" id="fileInput">
    <div class="buttons">
    <input type="submit" value="clear" id="clearButton" value=" <?= $chapterPhoto ?> ">
   <input type="submit" value="save" id="saveButton" name="saveButton"  onclick=" newCourse()">
    </div>
   
   
    
    
</form>


</div>
</div>

<div id="editCourse" class="editCourse hide">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="editCForm"> 
    <span style="color:red; font-family: 'Courier New' "><?=$alertMsg?></span>

    <label for="editCName">Course Name:</label>
    <input type="text" name="editCName" id="editCName" value="<?= $courseName ?>">

    <label for="editCHNumber">Chapter Number:</label>
    <input type="number" name="editCHNumber" id="editCHNumber" value="<?= $chapterNumber ?>">

    <!-- <label for="editCHTitle">Chapter Title:</label>
    <input type="text" name="editCHTitle" id="editCHTitle"> -->

    <!-- <label for="">Chapter Header:</label>
    <textarea name="" id="" cols="30" rows="10" id="editCHHeader"></textarea>

    <label for="">Chapter Body:</label>
    <textarea name="" id="" cols="30" rows="10" id="editCHBody"></textarea>

    <label for="">Insert Photo:</label>
    <input type="file" id="editCFile"> -->



        <div class="editCButtons">
          <input type="submit" value="clear" id="editCClearButton" name="editCClearButton">
          <input type="submit" value="delete" id="editCDeleteButton" name="editCDeleteButton">
        </div>
    

    </div>
   
</form>

</div>

<!--new tutorials -->
<div>

</div>
<!--edit tutorials -->
<div>

</div>

<!--vocabulary -->
<div class="vocabulary hide" id="vocabulary">
<form action="" method="post">

<div class="formContent">


    <label for="keyword">Keyword</label>
    <input type="text" name="keyword" id="keyword"> 

    <label for="description">Description</label>
    
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

    <input type="submit" name="sbmButton" id="sbmButton" value="save">
    
    <span style="color:red; font-family: 'Courier New'"><?=$vocabularyError?></span>
</div>
   
    
</form>
</div>
<!-- messages -->
<div class="messages hide" id="messages">
    <div>

    </div>
<h1 style="font-family:'Courier New'; width=:10vw; margin-left:28vw;" class="messagesTitle">Users Messages:</h1>
<?php
include_once '../models/messageRepository.php';
$mRepos=new MessageRepository();
$mRepos->getMessages();
?>
</div>



    <div id="profile" class="hide">
    
   
   <ul>
   <li class="data">Username:</li>
   
   <li><?=$username?></li>
   <li class="data">Password:</li>
   <li><?=$password?></li>
   <li class="data">Email:</li>
   <li><?=$email?></li>
   </ul>

   
   
   
    </div>

</div>






         </div>      
        
<script src="../js/adminDashboard.js"></script>
</body>
</html>