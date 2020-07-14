<?php
//session_start();
include_once 'createCourses.php';
include_once 'registerUsers.php';
include_once 'insertMessage.php';

$roli=$_SESSION['role'];
if($roli=='user'){
  $hide='hide';
}else{
  $hide="";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Java Course </title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/htmlCourseStyle.css">
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


<div class="main">

    <div class="kursetHTML">
    <?php
include_once '../models/DBConnection.php';
          $conn=new dataBaseConnection();
          $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course WHERE courseName='java' ";
         $stmt = $connection->query($sql);
   
       
        
         foreach($stmt as $row){
             
          $id= $row['id'];
          $courseName=$row['courseName'];
          $chapterNumber=$row['chapterNumber'];
           $title=$row['title'];
           $head=$row['head'];
           $body=$row['body'];
           $photo=$row['photo'];
          echo "<ul>
          <li><a href='#.$title'>$title</a></li>
          </ul>
          ";
         }
           ?>
       


    </div>




    <div class="allCourses">
        <div class = "content">
               



            <?php
            include_once '../models/DBConnection.php';
                      $conn=new dataBaseConnection();
                      $connection=$conn->startConnection();
               
                     $sql="SELECT * FROM course WHERE courseName='java'";
                     $stmt = $connection->query($sql);
               
                   
                    
                     foreach($stmt as $row){
                         
                      $id= $row['id'];
                      $courseName=$row['courseName'];
                      $chapterNumber=$row['chapterNumber'];
                       $title=$row['title'];
                       $head=$row['head'];
                       $body=$row['body'];
                       $photo=$row['photo'];
                       echo "<h1 style='width:60vw; font-family: Arial; id=$title'>$chapterNumber. $title</h1><br>";
                       echo "<h3 style='width:60vw; font-family: Arial;'>$head</h3><br>";
                       echo "<p style='width:60vw; font-family: Arial;'>$body</p><br><br><br>";
                       echo '<img src="$photo" >';
                     }
                       ?>





            

            
            
            
            
            











        </div>    
    </div>

</div>


<div id = "footer">
    <div class = "footer-content">
        <div class="footer-section about" style="width: 30vw">
            <h2 class = "footer-text" style = "font-size: 2vw;"> <span id = "webname-style">Prog</span>Tut</h2>
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
                      <li class="footerLink"><a href = "https://github.com/eltonboshnjaku/WEB-PROGRAMIM">Repository</a></li>
                  </ul>
        </div>
        <div class="footer-section contact" style = "width: 40vw;">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>Feedback</h3>
                <textarea name = "feedback" cols = "50" rows = "4" placeholder = "Sugjeroni..."></textarea>
                <br>
                <div class = "te_dhenat">
                    <label for = "emri"></label>
                    <input  style = "width:15vw" type = "name" id = "emri" name = "emri" placeholder = "Shenoni emrin tuaj" />
                    <label for = "email"></label>
                    <input style = "width:15vw" type = "email" id="email" name = "email" placeholder="Shenoni email tuaj" />
                </div>
                <button type = "submit">Dergo</button>
            </form>
        </div>
    </div>
    </div>

       
      

      







    </body>
</html>