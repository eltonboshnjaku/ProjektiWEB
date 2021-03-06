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

<html>
    <head>
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/home_style.css">
        <style>
        .hide{
          display:none;
        }
        </style>
        
    </head>

    <body style="background: rgb(34, 33, 33);">
        
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

                <li><a class="bar_item" href="logout.php" >Log Out </a></li>
                
 
            </ul>
             </div>
      
      
        
       

      <div class="slider middle">
      
      <div class="slides">

          <input type="radio" name="r" id="r1" checked>
          <input type="radio" name="r" id="r2">
          <input type="radio" name="r" id="r3">
          <input type="radio" name="r" id="r4"> 
      
      
          <div class="slide s1">
            <img src="../photos/slider1.jpg" alt=""> 
            
          </div>
      
          <div class="slide">
            <img src="../photos/slider2.jpg" alt="">
          </div>
      
          <div class="slide">
            <img src="../photos/slider4.jpg" alt="">
          </div>
      
          <div class="slide">
            <img src="../photos/slider3.png" alt="">
          </div>
      
          <!-- <div class="usText">
            <h1 style="font-family:cursive; color: white; font-size: 30px;">The World's Largest Web Developer Site.</h1>
            <h1 style="font-family: cursive; color: white; font-size: 30px;">Was Your Dream To Be A Programmer?</h1>
            <h1 style="font-family: cursive; color: white; font-size: 30px;">Here You Can Do It!</h1>
        </div> -->
        </div>
        
      
        <div class="navigation">
          <label for="r1" class="slideBar"></label>
          <label for="r2" class="slideBar"></label>
          <label for="r3" class="slideBar"></label>
          <label for="r4" class="slideBar"></label>
        </div>

      </div>








        <div class="main">

            <div class="courses">
                <div class="course">
                  <a  href="htmlCourse.php" class="kursi"><h3>HTML</h3></a> 
                </div>
      
                <div class="course">
                  <a href="cssCourse.php" class="kursi"><h3>CSS</h3></a>
                  
                  
              </div>
      
              <div class="course" >
                <a href="" class="kursi"><h3>JAVA SCRIPT</h3></a>
                  
              </div>
              <div class="course" >
                <a href="phpCourse.php" class="kursi"><h3>PHP</h3></a>
                  
              </div>
      
              <div class="course" >
                <a href="javaCourse.php" class="kursi"><h3>JAVA</h3></a>
                  
              </div>
      
              <div class="course" >
                <a href="" class="kursi"><h3>SQL</h3></a>
                  
              </div>
              <!-- <div class="course" >
                <a href="" class="kursi"><h3>TECH VOCABULARY</h3></a>
                
            </div> -->
    
    
              
    
            </div>
            <div class="coursesPhotos">
                <img class="pht" style="height: 12vw; " src="../photos/html.png" alt="">
                <img style="height: 12vw; margin-left: 50px;" src="../photos/css.png" alt="">
                <img style="height: 12vw; margin-left: 50px;" src="../photos/js.png" alt="">
                <img style="height: 12vw; margin-left: 50px;" src="../photos/java.png" alt="">
                <img style="height: 12vw; margin-left: 50px;" src="../photos/sql.png" alt="">
            </div>

        </div>
      
    
            <div class="coursesPart">
             <h1>Courses</h1>
            </div>
       

<!-- HTML -->

        <div class="gjuhet">
          <div class="gjuhet_titulli">
          <a href="htmlCourse.php"> <h2>HTML</h2> </a> 
          </div>
          <div class="gjuhet_body">
            <ul class="gjuhet_lista">
                <li>Introduction</li>
                <li>Editors</li>
                <li>Basic</li>
                <li>Elements</li>
                <li>Attributes</li>
                <li>Headings</li>
                <li>Paragraphs</li>
                <li>Styles</li>
                <li>Colors</li>
                
            </ul>
            <ul class="gjuhet_lista">
                
                <li>CSS</li>
                <li>Links</li>
                <li>Images</li>
                <li>Tables</li>
                <li>Lists</li>
                <li>Blocs</li>
                <li>Classes</li>
                <li>Id</li>
            </ul>
            <img style="height: 15vw; margin-top:40px ;" src="../photos/html.png" alt="">
          </div>
        </div>
    




        <!-- CSS -->
  
        <div class="gjuhet">
            <div class="gjuhet_titulli">
             <a  href="cssCourse.php"> <h2>CSS</h2></a>
            </div>
            <div class="gjuhet_body">
              <ul class="gjuhet_lista">
                  <li>Introduction</li>
                  <li>Syntax</li>
                  <li>Selectors</li>
                  <li>How To</li>
                  <li>Comments</li>
                  <li>Colors</li>
                  <li>Backgrounds</li>
                  <li>Borders</li>
                  <li>Margins</li>
                  
              </ul>
              <ul class="gjuhet_lista">
                  
                  <li>Padding</li>
                  <li>Height/Width</li>
                  <li>Box Model</li>
                  <li>Text</li>
                  <li>Fonts</li>
                  <li>Icons</li>
                  <li>Links</li>
                  <li>Lists</li>
                  <li>Tables</li>
              </ul>
              <ul class="gjuhet_lista">
                  
                <li>Display</li>
                <li>Position</li>
                <li>Opacity</li>
                <li>Text Effects</li>
                <li>Forms</li>
                <li>Buttons</li>
                <li>Flexbox</li>
                <li>Animations</li>
            </ul>
              <img style="height: 15vw; margin-top:40px ;" src="../photos/css.png" alt="">
            </div>
          </div>




          <!-- JS -->



          <div class="gjuhet">
            <div class="gjuhet_titulli">
             <a href=""><h2>JavaScript</h2></a>
            </div>
            <div class="gjuhet_body">
              <ul class="gjuhet_lista">
                  <li>Introduction</li>
                  <li>Where To</li>
                  <li>Output</li>
                  <li>Statements</li>
                  <li>Syntax</li>
                  <li>Comments</li>
                  <li>Variables</li>
                 
                  
              </ul>
              <ul class="gjuhet_lista">
                  <li>Operators</li>
                  <li>Data Types</li>
                  <li>Functions</li>
                  <li>Objects</li>
                  <li>Strings</li>
                  <li>Numbers</li>
                  
              </ul>
              <ul class="gjuhet_lista">
                <li>Arrays</li>
                <li>Booleans</li>
                <li>Switch</li>
                <li>Loop For</li>
                <li>Loop While</li>
                <li>Methods</li>
              </ul>
              <img style="height: 15vw; margin-top:40px ;" src="../photos/js.png" alt="">
            </div>
          </div>





          <!-- JAVA -->





          <div class="gjuhet">
            <div class="gjuhet_titulli">
              <a href="javaCourse.php"><h2>JAVA</h2></a>
            </div>
            <div class="gjuhet_body">
              <ul class="gjuhet_lista">
                  <li>Introduction</li>
                  <li>Syntax</li>
                  <li>Comments</li>
                  <li>Variables</li>
                  <li>Data Types</li>
                  <li>Type Casting</li>
                  <li>Strings</li>
                  
              </ul>
              <ul class="gjuhet_lista">
                  
                  <li>Booleans</li>
                  <li>If ... Else</li>
                  <li>Switch</li>
                  <li>While Loop</li>
                  <li>For Loop</li>
                  <li>Arrays</li>
                  <li>Methods</li>
                 
              </ul>
              <ul class="gjuhet_lista">
                  
                  
               
                <li>Classes</li>
                <li>User Inputs</li>
                <li>Lists</li>
                <li>Maps</li>
                <li>Exceptions</li>
                <li>Files</li>
            </ul>
              <img style="height: 15vw; margin-top:40px ;" src="../photos/java.png" alt="">
            </div>
          </div>



          <!-- SQL -->



          <div class="gjuhet">
            <div class="gjuhet_titulli">
              <a href=""><h2>SQL</h2></a>
            </div>
            <div class="gjuhet_body">
              <ul class="gjuhet_lista">
                  <li>Introduction</li>
                  <li>Syntax</li>
                  <li>Select</li>
                  <li>Where</li>
                  <li>And,Or,Not</li>
                  <li>Order By</li>
                  <li>Insert Into</li>
                  <li>Uptade</li>
                  <li>Delete</li>
                  
              </ul>
              <ul class="gjuhet_lista">
                  
                  <li>Count,Avg,Sum</li>
                  <li>Like</li>
                  <li>In</li>
                  <li>Between</li>
                  <li>Joins</li>
                  <li>Group By</li>
                  <li>Having</li>
                  <li>Exist</li>
                  <li>Case</li>
              </ul>
              <img style="height: 15vw; margin-top:40px ;" src="../photos/sql.png" alt="">
            </div>
          </div>
            
         
 <!-- TECH Vocabulary -->
          <div class="gjuhet">
            <div class="gjuhet_titulli">
              <a href="techVocabulary.php"><h2>TECH VOCABULARY</h2></a>
            </div>
            <div class="gjuhet_body">
                <ul class="gjuhet_lista">
                  
                    <li style="list-style-type: none; margin: 100px;"><a style="text-decoration:none;" href="techVocabulary.php">Click Here To Search.</a></li>
                </ul>
              
              
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


        <script src="../js/homeJS.js"></script>
    </body>
</html>

