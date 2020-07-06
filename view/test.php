<?php
include_once '../controller/CourseController.php';
include_once '../models/course.php';

$controller=new CourseController();

$course=$controller->getCourse("java");
?>

<!DOCTYPE html>

<html>
    <head>
        <title>HTML-Course </title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/htmlCourseStyle.css">
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
                    <li><a class="courseSubMenu" href="">JAVA</a></li>
                    <li><a class="courseSubMenu" href="phpCourse.html">PHP</a></li>
                    <li><a class="courseSubMenu" href="">SQL</a></li>
                    
                  </ul>
                
                
                
                
                </li>
                <li ><a class="bar_item" href="tutorials.html">Tutorials</a> </li>
                 <li ><a class="bar_item" href="techVocabulary.html">Tech Vocabulary</a> </li>
                 <li ><a class="bar_item" href="aboutUs.html">About Us</a> </li>
                 <li ><a class="bar_item" href="login.php">Login</a> </li>
                 
                 
  
             </ul>
          </div>


<div class="main">

    <div class="kursetHTML">
            <?php
include_once '../models/DBConnection.php';
          $conn=new dataBaseConnection();
          $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course ";
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
          <li><a href='#$chapterNumber'>$title</a></li>
          </ul>
          ";
         }
           ?>
        <!-- <ul>
            <li><a > Introduction</a></li>
            <li><a href="#editors">Editors</a> </li>
            <li><a href="">Basic</a> </li>
            <li><a href="#htmlElements">Elements</a> </li>
            <li><a href="">Attributes</a> </li>
            <li><a href="">Headings</a> </li>
            <li><a href="">Paragraphs</a> </li>
            <li><a href="">Styles</a> </li>
            <li><a href=""> Colors</a></li>
            <li><a href="">CSS</a> </li>
            <li><a href="">Links</a> </li>
            <li><a href="">Elements</a> </li>
            <li><a href="">Tables</a> </li>
            <li><a href="">Lists</a> </li>
            <li><a href="">Blocs</a> </li>
            <li><a href="">Classes</a> </li>
            <li><a href="">Id</a> </li>

        </ul> -->


    </div>




    <div class="allCourses">
        <div class = "content">

        <?php
include_once '../models/DBConnection.php';
          $conn=new dataBaseConnection();
          $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course ";
         $stmt = $connection->query($sql);
   
       
        
         foreach($stmt as $row){
             
          $id= $row['id'];
          $courseName=$row['courseName'];
          $chapterNumber=$row['chapterNumber'];
           $title=$row['title'];
           $head=$row['head'];
           $body=$row['body'];
           $photo=$row['photo'];
           echo "<h1 style='width:60vw; font-family: Arial; id=$chapterNumber'>$title</h1>";
           echo "<h3 style='width:60vw; font-family: Arial;'>$head</h3>";
           echo "<p style='width:60vw; font-family: Arial;'>$body</p>";
           echo '<img src="$photo" >';
         }
           ?>
         

            
        </div>
    </div>
</div>
    </body>
</html>
