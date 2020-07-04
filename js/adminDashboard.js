var usersPanel = document.getElementById("usersPanel");
var newCoursePanel= document.getElementById("newCourse");

function showUsers(){
    usersPanel.classList.remove("hide");
    hideNewCourse();
}

function newCourse(){
    newCoursePanel.classList.remove("hide");
    hideShowUsers();
}

function hideNewCourse(){
    newCoursePanel.classList.add("hide");
}
function hideShowUsers(){
    usersPanel.classList.add("hide");
    
}