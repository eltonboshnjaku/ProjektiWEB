
function changeForm(form) {
    let forms  = document.querySelectorAll("form>div");
    var register =document.getElementById("registerButton");
    var login = document.getElementById("firstA");
    

    if(form == 0){
        LoginSize()
        
        forms[0].classList.remove("hidden");
        forms[0].classList.add("form-style");
        forms[1].classList.add("hidden");
        forms[1].classList.remove("form-style");
        login.classList.add("hidden");
        login.classList.remove("form-style");
        register.classList.add("form-style");
        register.classList.remove("hidden");
        
    }else{
        RegisterSize();
        
        forms[1].classList.remove("hidden");
        forms[1].classList.add("form-style");
        forms[0].classList.add("hidden");
        forms[0].classList.remove("form-style")
        register.classList.add("hidden");
        register.classList.remove("form-style");
        login.classList.add("form-style");
        login.classList.remove("hidden");
    }
}
var loginForm = document.getElementById("loginform");
var container = document.getElementById("container");
function RegisterSize(){
   loginForm.style.height="90vh";
   loginForm.style.width="50vw"; 
   loginForm.style.marginTop="5vh";
   container.style.marginTop="5vh";
   
}
function LoginSize(){
    loginForm.style.height="70vh";
    loginForm.style.width="50vw"; 
    loginForm.style.marginTop="15vh";
    container.style.marginTop="10vh";
    
 }
