<?php


include_once 'registerUsers.php';


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
        <title>About Us</title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/aboutUs-style.css" />
        <link rel="stylesheet" type="text/css" href="../css/home_style.css" />
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






        <div id = "about-us">
            <div class = "blurred_image">
                <img src = "../photos/aboutus.jpg" alt = "" />
            </div>
            <div class = "about_us_text">
                <p id = "about_desc">About Us</p>
                <p class="about_content">The World's Largest Web Developer Site.</p>
                <p class="about_content">Was Your Dream To Be A Programmer?</p>
                <p class="about_content">Here You Can Do It!</p>
            </div>
        </div>
        <div class = "container">
            <img id = "teambg" src = "../photos/teambg.png" alt = "team bg" />
            <h1 id = "team_title">Our team</h1>
            <div class = "team">
                <div class = "author_section">
                    <div class = "author">
                        <img src = "../photos/profile.png" />
                        <h3>Elton Boshnjaku</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <span class = "email"><a href = "mailto: example@domain.com">example@domain.com</a></span>
                        </p>
                    </div>
                    <div class = "author">
                        <img src = "../photos/profile.png" />
                        <h3>Tomor Macastena</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <span class = "email"><a href = "mailto: example@domain.com">example@domain.com</a></span>
                        </p>
                    </div>
                    <div class = "author">
                        <img src = "../photos/profile.png" />
                        <h3>Ndriqim Asllani</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <span class = "email"><a href = "mailto: example@domain.com">example@domain.com</a></span>
                        </p>
                    </div>
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
                      <li class="footerLink"><a href = "https://github.com/eltonboshnjaku/WEB-PROGRAMIM">Repository</a></li>
                  </ul>
              </div>
            <div class="footer-section contact" style="width: 40vw;">
                <form>
                  <h3>Feedback</h3>
                    <textarea name = "feedback" cols = "50" rows = "4" placeholder = "Sugjeroni..."></textarea>
                    <br>
                    <div class = "te_dhenat">
                        <label for = "emri"></label>
                        <input style="width: 15vw;" type = "name" id = "emri" name = "emri" placeholder = "Shenoni emrin tuaj" />
                        <label for = "email"></label>
                        <input style="width: 15vw;" type = "email" id="email" name = "email" placeholder="Shenoni email tuaj" />
                    </div>
                    <button type = "submit" style="width: 8vw;">Dergo</button>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>