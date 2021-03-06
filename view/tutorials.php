<?php
//session_start();
include_once 'createCourses.php';
include_once 'registerUsers.php';
include_once 'insertMessage.php';

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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/tutorials.css">
    <link rel="stylesheet" type="text/css" href="../css/home_style.css">
    <title>Tutorials</title>
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
                <li><a class="bar_item" href="logout.php">Log Out</a>
                
 
            </ul>
             </div>


<div class="main-part">

  <div class="courses-link">

    <ul>
      <li> <a onclick="showHtmlVideo()">HTML</a> </li>
      <li><a  onclick="showCssVideo()">CSS</a></li>
      <li><a  onclick="showJsVideo()">JAVASCRIPT</a></li>
      <li><a  onclick="showPhpVideo()">PHP</a></li>
      <li><a  onclick="showJavaVideo()">JAVA</a></li>
      <li><a  onclick="showSqlVideo()">SQL</a></li>
    </ul>
  </div>



  <div class="videos-part">
<div class="helpText" id="helpText">
  Click in the left buttons to show videos.
</div>
       

    <div class="courses-div hide" id="htmlVideo">
      
        <iframe  src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        

    </div>



     <div class="courses-div hide" id="cssVideo">
      
      <iframe  src="https://www.youtube.com/embed/yfoY53QXEnI" frameborder="0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div> 




    <div class="courses-div hide" id="jsVideo">
     
      <iframe  src="https://www.youtube.com/embed/hdI2bqOjy3c" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>




    <div class="courses-div hide" id="phpVideo">
     
      <iframe  src="https://www.youtube.com/embed/NihZYkNpslE" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      

    </div>

    <div class="courses-div hide" id="javaVideo">
      
      <iframe src="https://www.youtube.com/embed/eIrMbAQSU34" frameborder="0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <div class="courses-div hide" id="sqlVideo">
      
      <iframe src="https://www.youtube.com/embed/XqIk2PwP0To" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div> 




    

  </div>

  
</div>

<div id = "footer">
          <div class = "footer-content">
              <div class="footer-section about" style="width: 30vw;">
                  <h2 class = "footer-text" style="font-size: 2vw;"><span id = "webname-style">Prog</span>Tut</h2>
                  <p>
                    The World's Largest Web Developer Site.
                    Was Your Dream To Be A Programmer?
                    Here You Can Do It!
                  </p>
              </div>
              <div class="footer-section links">
                  <h3>Links</h3>
                  <ul>
                      <li class="footerLink"><a href = "home.php">Home</a></li>
                      <li class="footerLink"><a href = "tutorials.php">Tutorials</a></li>
                      <li class="footerLink"><a href = "techVocabulary.php">Tech Vocabulary</a></li>
                      <li class="footerLink"><a href = "aboutUs.php">About Us</a></li>
                      <li class="footerLink"><a href = "privacyPolicy.html">Privacy Policy</a></li>
                      <li class="footerLink"><a href = "https://github.com/eltonboshnjaku/ProjektiWEB">Repository</a></li>
                  </ul>
              </div>
            <div class="footer-section contact" style="width: 40vw;">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                  <h3>Feedback</h3>
                    <textarea name = "feedback" cols = "50" rows = "4" placeholder = "Suggest us..."></textarea>
                    <br>
                    <div class = "te_dhenat">
                        <label for = "emri"></label>
                        <input style="width: 15vw;" type = "name" id = "emri" name = "emri" placeholder = "Your name" />
                        <label for = "email"></label>
                        <input style="width: 15vw;" type = "email" id="email" name = "email" placeholder="Your email" />
                    </div>
                    <button type = "submit" style="width: 8vw;" name="saveButton">Save</button>
                </form>
                <span></span>
            </div>
          </div>
        </div>
<script src="../js/tutorialsJS.js"></script>
</body>
</html>
