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
        <title>CSS-Course</title>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "../css/cssCourseStyle.css" />
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
                    <li><a href="#selectors">Selectors</a> </li>
                    <li><a href="">How To</a> </li>
                    <li><a href="">Comments</a> </li>
                    <li><a href="">Colors</a> </li>
                    <li><a href="">Backgrounds</a> </li>
                    <li><a href="">Borders</a> </li>
                    <li><a href="">Margins</a></li>
                    <li><a href="">Padding</a> </li>
                    <li><a href="">Height/Width</a> </li>
                    <li><a href="">Box Model</a> </li>
                    <li><a href="">Outline</a> </li>
                    <li><a href="">Text</a> </li>
                    <li><a href="">Fonts</a> </li>
                    <li><a href="">Icons</a> </li>
                    <li><a href="">Links</a> </li>
                    <li><a href="">Lists</a> </li>
                </ul> -->
            </div>
            <div class="allCourses">
                <div class = "content">
                    <!-- <h1 id="intro">CSS Introduction</h1>
            
                    <h3>What is CSS?</h3>
                    <ul>
                    <li><b>CSS</b> stands for <b>C</b>ascading <b>S</b>tyle <b>S</b>heets</li> 
                    <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
                    <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
                    <li>External stylesheets are stored in CSS files</li>
                    </ul>
            
                    <br> <br>
                    <h3>CSS Solved a Big Problem</h3>
                    <p>HTML was NEVER intended to contain tags for formatting a web page!</p>
                    <p> HTML was created to describe the content of a web page, like:
                    <p>&lth1&gtThis is a heading&lth1&gt</p>
                    <p>&ltp&gtThis is a paragraph.&ltp&gt</p>
                    </p>
                    <p>When tags like &ltfont&gt, and color attributes were added to the HTML 3.2 specification, 
                        it started a nightmare for web developers. Development of large websites, where fonts and color information were added 
                        to every single page, became a long and expensive process.</p>
                    <p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
                    <p>CSS removed the style formatting from the HTML page!</p>
                    <h3>CSS Demo - One HTML Page - Multiple Styles!</h3>
                    <img src="../photos/demo_css.png" alt="css demo Photo" style = "height: 370px; width: 500px; margin-left: 20px; margin-top: 0px;" /> 
                    <br><br><br>
                    <br><br>
            
            
            
            
                    <h1 id="syntax">CSS Syntax</h1>
                
                    <h3>CSS Syntax</h3>
                    <p>A CSS rule-set consists of a selector and a declaration block:</p>
                    <img src = "../photos/selector.gif" alt="css syntax" />
                    <p>The selector points to the HTML element you want to style.</p>
                    <p>The declaration block contains one or more declarations separated by semicolons.</p>
                    <p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
                    <p>Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.</p>
                    
                
                    <h3>CSS Example</h3>
                    <img src = "../photos/writeCSS.png" alt = "css example" />
                    <hr>
                    <h5>Example explained</h5>
                    <p><span style = "color: red; font-weight: bold";>p</span> is a selector in CSS (it points to the HTML element you want to style: &ltp&gt).</p>
                    <p><span style = "color: red; font-weight: bold";>color</span> is a property, and red is the property value</p>
                    <p><span style = "color: red; font-weight: bold";>text-align</span> is a property, 
                        and <span style = "color: red; font-weight: bold";>center</span> is the property value</p>

                    <button><a href="#intro">Go to previous chapter</a></button>
                    <br /><br />


                    <h1 id = "selectors">CSS Selectors</h1>
                    <h3>CSS Selectors</h3>
                    <p>CSS selectors are used to "find" (or select) the HTML elements you want to style.</p>
                    <p>We can divide CSS selectors into five categories:
                        <ul>
                            <li>Simple selectors (select elements based on name, id, class)</li>
                            <li>Combinator selectors (select elements based on a specific relationship between them)</li>
                            <li>Pseudo-class selectors (select elements based on a certain state)</li>
                            <li>Pseudo-elements selectors (select and style a part of an element)</li>
                            <li>Attribute selectors (select elements based on an attribute or attribute value)</li>
                        </ul>
                    </p>
                    <h2>CSS Simple Selectors</h2>
                    <table class = "table_selectors">
                        <tr>
                            <th>Selector</th>
                            <th>Example</th>
                            <th>Example Description</th>
                        </tr>
                        <tr>
                            <td>.class</td>
                            <td>.intro</td>
                            <td>Selects all elements with class="intro"</td>
                        </tr>
                        <tr>
                            <td>#id</td>
                            <td>#outro</td>
                            <td>Selects the element with id="firstname"</td>
                        </tr>
                        <tr>
                            <td>*</td>
                            <td>*</td>
                            <td>Selects all elements</td>
                        </tr>
                        <tr>
                            <td>element</td>
                            <td>p</td>
                            <td>Selects all &ltp&gt elements </td>
                        </tr>
                        <tr>
                            <td>element, element,..</td>
                            <td>div, p</td>
                            <td>Selects all &ltdiv&gt elements and &ltp&gt elements</td>
                        </tr>
                        <tr>
                            <td>.class</td>
                            <td>.intro</td>
                            <td>Selects all elements with class="intro"</td>
                        </tr>
                    </table>

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
                       echo "<h1 style='width:60vw; font-family: Arial; id=$title'>$chapterNumber. $title</h1>";
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