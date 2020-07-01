

 var elementet = document.querySelectorAll("p");
 var tagjet = document.querySelectorAll("h2");
 var alertText = document.getElementById("alertText");



 for(var i=0;i<tagjet.length;i++){
 tagjet[i].classList.add("hide");
 }

 
function shfaqTekstin(){
    var fjala = document.getElementById("search").value;
    
    var i;
    if(fjala == ""){
        alertText.innerHTML="Please write something before searching.";
        alertText.classList.remove("hide");

    }else{

        for (i = 0; i < tagjet.length; i++) {

          
                if (fjala.toLowerCase().includes(tagjet[i].id.toLowerCase(),0)) {
                tagjet[i].classList.remove("hide");
                tagjet[i].firstElementChild.classList.remove("hide");
                alertText.classList.add("hide");

                break;
            }

        }
        if (i >= tagjet.length) {
            alertText.innerHTML = "Fjala nuk ekziston";
            alertText.classList.remove("hide");
        }

    }

}


function fshijeTekstin(){
    for(var i=0;i<tagjet.length;i++){
        tagjet[i].classList.add("hide");
    }

    for(var i=0;i<elementet.length;i++){
        elementet[i].classList.add("hide");
     }
     
     alertText.classList.add("hide");
}

