var htmlVideo = document.getElementById("htmlVideo");
var cssVideo = document.getElementById("cssVideo");
var jsVideo = document.getElementById("jsVideo");
var phpVideo = document.getElementById("phpVideo");
var javaVideo = document.getElementById("javaVideo");
var sqlVideo = document.getElementById("sqlVideo");
var helpText=document.getElementById("helpText");

function showHtmlVideo(){
    htmlVideo.classList.remove("hide");
    hideCss();
    hideJs();
    hidePhp();
    hideJava();
    hideSql();
    hideHelpText();
}

function showCssVideo(){
    cssVideo.classList.remove("hide");
    hideHtml();   
    hideJs();
    hidePhp();
    hideJava();
    hideSql();
    hideHelpText();
}

function showJsVideo(){
    jsVideo.classList.remove("hide");
    hideHtml();
    hideCss();    
    hidePhp();
    hideJava();
    hideSql();
    hideHelpText();
}

function showPhpVideo(){
    phpVideo.classList.remove("hide");
    hideHtml();
    hideCss();
    hideJs(); 
    hideJava();
    hideSql();
    hideHelpText();
}

function showJavaVideo(){
    javaVideo.classList.remove("hide");
    hideHtml();
    hideCss();
    hideJs();
    hidePhp();  
    hideSql();
    hideHelpText();
}

function showSqlVideo(){
    sqlVideo.classList.remove("hide");
    hideHtml();
    hideCss();
    hideJs();
    hidePhp();
    hideJava();
    hideHelpText();
    
}



function hideHtml(){
    htmlVideo.classList.add("hide");
}
function hideCss(){
    cssVideo.classList.add("hide");
}
function hideJs(){
    jsVideo.classList.add("hide");
}
function hidePhp(){
    phpVideo.classList.add("hide");
}
function hideJava(){
    javaVideo.classList.add("hide");
}
function hideSql(){
    sqlVideo.classList.add("hide");
}
function hideHelpText(){
    helpText.classList.add("hide");
}