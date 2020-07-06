

var usersPanel = document.getElementById("usersPanel");
var newCoursePanel= document.getElementById("newCourse");
var editCoursePanel=document.getElementById("editCourse");
var messagesPanel=document.getElementById("messages");
var profilePanel=document.getElementById("profile");

function showUsers(){
    usersPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideProfile();
}

function newCourse(){
    newCoursePanel.classList.remove("hide");
    hideUsers();
    hideEditCourse();
    hideMessages();
    hideProfile();
}

function editCourse(){
    editCoursePanel.classList.remove("hide");
    hideNewCourse();
    hideUsers();
    hideMessages();
    hideProfile();
}
function showMessages(){
    messagesPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideUsers();
    hideProfile();
}

function showProfile(){
    profilePanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
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



<?php 
include '';
?>
