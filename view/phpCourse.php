<?php
//session_start();
include_once 'createCourses.php';
include_once 'registerUsers.php';


$roli=$_SESSION['role'];
if($roli=='user'){
  $hide='hide';
}else{
  $hide="";
}
<!DOCTYPE html>
<html>
    <head>
        <title>PHP-Course</title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel = "stylesheet" type = "text/css" href = "../css/cssCourseStyle.css"; />
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

          

          <div class = "main">
            <div class="kursetHTML">
            <?php
include_once '../models/DBConnection.php';
          $conn=new dataBaseConnection();
          $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course WHERE courseName='html' ";
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
                <!-- <ul>
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#syntax">Syntax</a> </li>
                    <li><a href="#comments">Comments</a> </li>
                    <li><a href="">Variables</a> </li>
                    <li><a href="">Echo / Print</a> </li>
                    <li><a href="">Data Types</a> </li>
                    <li><a href="">Strings</a> </li>
                    <li><a href="">Numbers</a> </li>
                    <li><a href="">Math</a></li>
                    <li><a href="">Constants</a> </li>
                    <li><a href="">Operators</a> </li>
                    <li><a href="">If...Else...Elseif</a> </li>
                    <li><a href="">Switch</a> </li>
                    <li><a href="">Loops</a> </li>
                    <li><a href="">Functions</a> </li>
                    <li><a href="">Arrays</a> </li>
                    <li><a href="">Superglobals</a> </li>
                </ul> -->
            </div>
            <div class="allCourses">
                <div class = "content">
                    <!-- <h1 id="intro">PHP Introduction</h1>
            
                    <h3>What is PHP?</h3>
                    <ul>
                    <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li> 
                    <li>PHP is a widely-used, open source scripting language</li>
                    <li>PHP scripts are executed on the server</li>
                    <li>PHP is free to download and use</li>
                    </ul>
            
                    <br> <br>
                    <h3>What is a PHP File?</h3>
                    <ul>
                        <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
                        <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
                        <li>PHP files have extension ".php"</li>
                    </ul>
                    <h3>PHP files have extension ".php"</h3>
                    <ul>
                        <li>PHP can generate dynamic page content</li>
                        <li>PHP can create, open, read, write, delete, and close files on the server</li>
                        <li>PHP can collect form data</li>
                        <li>PHP can send and receive cookies</li>
                        <li>PHP can add, delete, modify data in your database</li>
                        <li>PHP can be used to control user-access</li>
                        <li>PHP can encrypt data</li>
                    </ul>
                    <p>With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.</p>
                    <h3>Why PHP?</h3>
                    <ul>
                        <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
                        <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
                        <li>PHP supports a wide range of databases</li>
                        <li>PHP is free.</li>
                        <li>PHP is easy to learn and runs efficiently on the server side</li>
                    </ul>
                    <br><br><br>
                    <br><br>
            
            
            
            
                    <h1 id="syntax">PHP Syntax</h1>
                
                    <h3>PHP Syntax</h3>
                    <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
                    <h3>Basic PHP Syntax</h3>
                    <p>A PHP script can be placed anywhere in the document.</p>
                    <p>A PHP script starts with &lt?php and ends with ?&gt:</p>
                    <hr>
                    <p>&lt?php</p>
                    <p>// PHP code goes here</p>
                    <p>?&gt</p>
                    <hr>
                    <p>The default file extension for PHP files is "<span style = "color: red">.php</span>".</p>
                    <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>
                    <p>Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:</p>
                    
                
                    <h3>PHP Example</h3>
                    <hr>
                    <div class = "kodi">
                        <p>&lt!DOCTYPE html&gt</p>
                        <p>&lthtml&gt</p>
                        <p>&ltbody&gt</p>
                        <p>&lth1&gtMy first page&lth1&gt</p>
                        <p>&lt?php</p>
                        <p>echo "Hello World!";</p>
                        <p>?&gt</p>
                        <p>&lt/body&gt</p>
                        <p>&lt/html&gt</p>
                    </div>
                    <hr>
                    <p><b>Note:</b>PHP Statements end with a semicolon (;)</p>
                    <br>
                    <h4>PHP Case Sensitivity</h4>
                    <p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</p>
                    <p><b>Note:</b>Note: However; all variable names are case-sensitive!</p>
                    <button><a href="#intro">Go to previous chapter</a></button>
                    <br /><br />


                    <h1 id = "comments">PHP Comments</h1>
                    <h3>Comments in PHP</h3>
                    <p>A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.</p>
                    <p>Comments can be used to:
                        <ul>
                            <li>Let others understand your code</li>
                            <li>Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code</li>
                        </ul>
                    </p>
                    <p>PHP supports several ways of commenting:</p>
                    <section>
                        
                        <p><b>Single line comments:</b></p>
                        <hr>
                        <div class = "kodi">
                            <p>&lt!DOCTYPE html&gt</p>
                            <p>&lthtml&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lt?php</p>
                            <p><span style = "color: green">//This is signle-line comment</span></p>
                            <p><span style = "color: green">#This is also a signle-line comment</span></p>
                            <p>?&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lthtml&gt</p>
                        </div>
                        <br>
                        <p><b>Multiple lines comments:</b></p>
                        <div class = "kodi">
                            <p>&lt!DOCTYPE html&gt</p>
                            <p>&lthtml&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lt?php</p>
                            <p><span style = "color: green">/*This is multiple-lines comment</span></p>
                            <p><span style = "color: green">that spans over multiple</span></p>
                            <p><span style = "color: green">line/*</span></p>
                            <p>?&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lthtml&gt</p>
                        </div>
                        <br>
                        <p><b>Using comments to leave out parts of the code:</b></p>
                        <div class = "kodi">
                            <p>&lt!DOCTYPE html&gt</p>
                            <p>&lthtml&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lt?php</p>
                            <p><span style = "color: green">//You can also use comments to leave out parts of the code line</span></p>
                            <p>$x = 5<span style = "color: green"> /* + 15 */</span> + 5;</p>
                            <p>echo $x;</p>
                            <p>?&gt</p>
                            <p>&ltbody&gt</p>
                            <p>&lthtml&gt</p>
                        </div>
                    </section>

                    <button><a href="#syntax">Go to previous chapter</a></button> -->

                    <?php
            include_once '../models/DBConnection.php';
                      $conn=new dataBaseConnection();
                      $connection=$conn->startConnection();
               
                     $sql="SELECT * FROM course WHERE courseName='html'";
                     $stmt = $connection->query($sql);
               
                   
                    
                     foreach($stmt as $row){
                         
                      $id= $row['id'];
                      $courseName=$row['courseName'];
                      $chapterNumber=$row['chapterNumber'];
                       $title=$row['title'];
                       $head=$row['head'];
                       $body=$row['body'];
                       $photo=$row['photo'];
                       echo "<h1 style='width:60vw; font-family: Arial; id=$title'>$chapterNumber.  $title</h1>";
                       echo "<h3 style='width:60vw; font-family: Arial;'>$head</h3>";
                       echo "<p style='width:60vw; font-family: Arial;'>$body</p>";
                       echo '<img src="$photo" >';
                     }
                       ?>

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
                        <li class="footerLink"><a href = "home.html">Home</a></li>
                        <li class="footerLink"><a href = "home.html">Courses</a></li>
                        <li class="footerLink"><a href = "techVoc.html">Tech Vocabulary</a></li>
                        <li class="footerLink"><a href = "aboutUs.html">About Us</a></li>
                        <li class="footerLink"><a href = "privacyPolicy.html">Privacy Policy</a></li>
                        <li class="footerLink"><a href = "https://github.com/eltonboshnjaku/WEB-PROGRAMIM">Repository</a></li>
                    </ul>
                </div>
              <div class="footer-section contact" style="width: 40vw;">
                  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
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