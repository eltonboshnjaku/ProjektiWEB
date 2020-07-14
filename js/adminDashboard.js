

var usersPanel = document.getElementById("usersPanel");
var newCoursePanel= document.getElementById("newCourse");
var editCoursePanel=document.getElementById("editCourse");
var messagesPanel=document.getElementById("messages");
var profilePanel=document.getElementById("profile");
var editWordPanel = document.getElementById("editWord");
var vocabularyPanel = document.getElementById("vocabulary");
var allCourses=document.getElementById("allCourses");
var allWords=document.getElementById("allWords");

function showUsers(){
    usersPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
}
function showAllCourses(){
    allCourses.classList.remove("hide");
    hideUsers();
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
}
function showAllWords(){
    allWords.classList.remove("hide");
    hideUsers();
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllCourses();
}
function newCourse(){
    newCoursePanel.classList.remove("hide");
    hideUsers();
    hideEditCourse();
    hideMessages();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
}

function editCourse(){
    editCoursePanel.classList.remove("hide");
    hideNewCourse();
    hideUsers();
    hideMessages();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
}
function showMessages(){
    messagesPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideUsers();
    hideProfile();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
}

function showProfile(){
    profilePanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
    hideVocabulary();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
}
function showEditWord(){
    editWordPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
    hideProfile();
    hideVocabulary();
    hideAllWords();
    hideAllCourses();
}
function showVocabulary(){
    vocabularyPanel.classList.remove("hide");
    hideNewCourse();
    hideEditCourse();
    hideMessages();
    hideUsers();
    hideProfile();
    hideEditWord();
    hideAllWords();
    hideAllCourses();
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

function hideEditWord(){
    editWordPanel.classList.add("hide");
}
function hideAllWords(){
    allWords.classList.add("hide");
}
function hideAllCourses(){
    allCourses.classList.add("hide");
}