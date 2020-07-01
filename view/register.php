<?php

include ('registerUsers.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/register_style.css" /> 

        
    </head>
    <body>

  
        <div class="registerform" id="registerform">
            <img style="width: 20%; margin-left: 40%;" src="../photos/user.png" alt="">

             <div class="container" id="container">
            
          
            
            <form id="mainForm" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" >
            <div class="login forms form-style">
                
                    
                    <input type="text" name="email" class="input" id="emailF"  placeholder="Your Email" value="<?= $registerEmail ?>"/>
                    <span style="color:red; "><?= $registerEmailError ?></span>

                    <input type="text" name="username" class="input" id="usernameF"  placeholder="Your Username" value="<?= $registerUsername ?>"/>
                    <span style="color:red;"><?= $registerUsernameError ?></span>

                    <input type="password" name="password" class="input" id="passwordF"  placeholder="Your Password"  value="<?= $registerPassword ?>"/>
                    <span style="color:red;"><?= $registerPasswordError ?></span>

                    <div class="loginRegister">
                        <input  id="submit" name="registerBtn" type="submit" class="input sumbit" value="Register"  />
                        <div class="link-container">
                            <a  id="firstA" href="login.php"  >Login</a> 
                            
                       </div>
                    </div>
                    <span style="color:green; margin-top:2vh;"><?= $registerSuccess ?></span>

                    </div>
                    
            </form>
            


        
            
        </div>

        

        </div>

       
<script src="../js/loginRegister.js"></script>


  
    </body>
</html>