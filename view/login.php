<?php

include 'registerUsers.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/login_style.css" />

        
    </head>
    <body>

    <div class="allContent">
        <div class="webInfo">
            <div class="title">
            <a class="maintitle" href="login.php">Progtut<span class="com">.com</span> </a>
            </div>
        
        <p style="font-family: 'Segoe Print';"><b>THE WORLD'S LARGEST WEB DEVELOPER SITE</b> </p>
        <p style="font-family: 'Segoe Print';">Progtut is a web developers site, with tutorials and references on web development languages such as HTML, CSS, JavaScript,
             PHP, SQL, Java, covering most aspects of web programming.</p>
             <p>Create your  account <a href="register.php">here</a></p>
        </div>
    


    <div class="loginform" id="loginform">
        
        <img style="width: 20%; margin-left: 40%;" src="../photos/user.png" alt="">

         <div class="container" id="container">
        
      
        
        <form id="mainForm" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" >
            <div class="login forms form-style">
                
               
                <input type="text" name="usern" class="input"  id="usernameField" placeholder="Your Username" value="<?= $loginUsername ?>" />
                
                <span style="color:red;"><?= $loginUsernameError ?></span>


                
                <input type="password" name="pw" class="input"  id="passwordField" placeholder="Your Password" value="<?= $loginPassword ?>"/>
                <span style="color:red;"><?= $loginPasswordError ?></span>

                <div class="loginRegister">
                     <input  id="submit" name="loginButton" type="submit" class="input submit" value="Login" /> 
                    
                    
                    <div class="link-container">
                        
                        <a  id="registerButton"  href="register.php"  >Register</a> 
                   </div>
                   
                </div>
           
                <span style="color:red;"><?=  $loginFailed ?></span>
                
            </div>
           

        </form>
        


    
        
    </div>

    

    </div>

    </div>
        
      
       



  
    </body>
</html>