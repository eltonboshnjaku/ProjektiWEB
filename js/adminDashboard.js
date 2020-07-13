

var usersPanel = document.getElementById("usersPanel");
var newCoursePanel= document.getElementById("newCourse");
var editCoursePanel=document.getElementById("editCourse");
var messagesPanel=document.getElementById("messages");
var profilePanel=document.getElementById("profile");
var vocabularyPanel = document.getElementById("vocabulary");

function showUsers(){
    usersPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
}

function newCourse(){
    newCoursePanel.classList.remove("hide");
    hideUsers();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
}

function editCourse(){
    editCoursePanel.classList.remove("hide");
    hideNewCourse();
    hideUsers();
    hideMessages();
    hideProfile();
    hideVocabulary();
}
function showMessages(){
    messagesPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideUsers();
    hideProfile();
    hideVocabulary();
}

function showProfile(){
    profilePanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
    hideVocabulary();
}
function showVocabulary(){
    vocabularyPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
    hideProfile();
}

function hideMessages(){
    messagesPanel.classList.add("hide");
}
function hideEditCourse(){
    editCoursePanel.classList.add("hide");
}
function hideNewCourse(){
    newCoursePanel.classList.add("hide");
}
function hideUsers(){
    usersPanel.classList.add("hide");
    
}
function hideProfile(){
    profilePanel.classList.add("hide");
}
function hideVocabulary(){
    vocabularyPanel.classList.add("hide");
}


