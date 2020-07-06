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
            <li><a href="#intro"> Introduction</a></li>
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
                <!-- <h1 id="intro">HTML Introduction</h1>

                <h3>What is HTML?</h3>
                <ul>
                <li>HTML stands for Hyper Text Markup Language</li> 
                <li>HTML describes the structure of a Web page</li>
                <li>HTML consists of a series of elements</li>
                <li>HTML elements tell the browser how to display the content</li>
                <li>HTML elements are represented by tags</li>
                <li>HTML tags label pieces of content such as "heading", "paragraph", "table", and so on</li>
                <li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
                </ul>

                        <br> <br>
                <h3>Web Browsers</h3>
                <p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them.</p>
                <p> The browser does not display the HTML tags, but uses them to determine how to display the document:</p>
                <img src="../photos/chrome.png" alt="Browser Photo">
                
                    <br><br>
                    <h3>HTML Page Structure</h3>
                    <p>Below is a visualization of an HTML page structure:</p>
                    <img src="../photos/pageStructure.PNG" alt="">
                    

                    <br> <br>
                    <h3>The <!DOCTYPE> Declaration</h3>
                    
                <p>The < ! DOCTYPE >  declaration represents the document type, and helps browsers to display web pages correctly.</p> 
                <p>It must only appear once, at the top of the page (before any HTML tags).</p>
                <p>The < ! DOCTYPE > declaration is not case sensitive.</p>
                <br>
                <br>
                




            <h1 id="editors">HTML Editors</h1>

            <h3>Learn HTML Using Notepad or TextEdit</h3>
            <p>Web pages can be created and modified by using professional HTML editors.</p>
            <p>However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).</p>
            <p>We believe using a simple text editor is a good way to learn HTML.</p>
            <p>Follow the steps below to create your first web page with Notepad or TextEdit.</p>
            

                <h3>Step 1: Open Notepad (PC)</h3>
                <p> <b>Windows 8 or later:</b> </p>
            <p>Open the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.</p>

            <p><b>Windows 7 or earlier:</b></p>
            <p>Open Start > Programs > Accessories > Notepad</p>
            
            <h3> Step 1: Open TextEdit (Mac)</h3>
            <p>Open Finder > Applications > TextEdit</p>
            <p>Also change some preferences to get the application to save files correctly. In Preferences > Format > choose "Plain Text"</p>
            <p>Then under "Open and Save", check the box that says "Display HTML files as HTML code instead of formatted text".</p>
            <p>Then open a new document to place the code.</p>
            <h3> Step 2: Write Some HTML</h3>
            <p> Write or copy some HTML into Notepad.</p>

            <button><a href="#intro">Go to previous chapter</a></button>
            <br><br>
            
            
            <h1 id="htmlElements">HTML Elements</h1>

            <p>An HTML element is defined by a start tag, some content, and an end tag.</p>

            <h3>HTML Elements</h3>
            <p>An HTML element usually consists of a start tag and an end tag, with the content inserted in between:</p>
            <p>< tagname >Content goes here...</ tagname ></p>
            <p>The HTML element is everything from the start tag to the end tag:</p>
            <p> < p >My first paragraph. < / p > </p>

            <img src="../photos/htmlElements.PNG" alt="">

            <br>

            <h2>Nested HTML Elements</h2>
            <p>HTML elements can be nested (elements can contain elements).</p>
            <p>All HTML documents consist of nested HTML elements.</p>
            <p>This example contains four HTML elements:</p>

            <h3>Example</h3>
            <img src="../photos/htmlElementsEX.PNG" alt="">

            <br>
            <button><a href="#editors">Go to previous chapter</a></button>
            <br><br> -->



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
                <li class="footerLink"><a href = "home.html">Home</a></li>
                <li class="footerLink"><a href = "kurset.html">Courses</a></li>
                <li class="footerLink"><a href = "techVoc.html">Tech Vocabulary</a></li>
                <li class="footerLink"><a href = "aboutUs.html">About Us</a></li>
                <li class="footerLink"><a href = "privacyPolicy.html">Privacy Policy</a></li>
                <li class="footerLink"><a href = "https://github.com/eltonboshnjaku/WEB-PROGRAMIM">Repository</a></li>
            </ul>
        </div>
        <div class="footer-section contact" style = "width: 40vw;">
            <form>
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