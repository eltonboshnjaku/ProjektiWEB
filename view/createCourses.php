<?php
include_once '../controller/CourseController.php';

$alertMessage="";
$courseName=$chapterNumber= $chapterTitle=$chapterHeader=$chapterBody=$chapterPhoto="";
if(isset($_POST["saveButton"])){
   if(empty($_POST["courseName"]) || empty($_POST["chapterNumber"])  || empty($_POST["courseTitle"])  || empty($_POST["courseHeader"])  ||
   empty($_POST["courseBody"])   ){

      $alertMessage="All fields are required!";
    

   }else{
      $courseName=strtolower($_POST["courseName"]);
      $chapterNumber=$_POST["chapterNumber"];
      $chapterTitle=$_POST["courseTitle"];
      $chapterHeader=$_POST["courseHeader"];
      $chapterBody=$_POST["courseBody"];
      $chapterPhoto=$_POST["fileInput"];
      
   
      $courseController = new CourseController();
      $courseController->createCourse($courseName,$chapterNumber, $chapterTitle, $chapterHeader, $chapterBody,$chapterPhoto);
   }
   
   
   
}else if(isset($_POST["clearButton"])){
   $courseName="";
   $chapterNumber="";
   $chapterTitle="";
   $chapterHeader="";
   $chapterBody="";
   $chapterPhoto="";
   
}

$alertMsg="";
$courseName="";
$chapterNumber="";
if(isset($_POST["editCDeleteButton"])){
   
   if(empty($_POST["editCName"]) || empty($_POST["editCHNumber"])){
      $alertMsg="All fields are required!";
   }else{
      $courseName=strtolower($_POST["editCName"]);
      $chapterNumber=$_POST["editCHNumber"];

      $courseController = new CourseController();
      $courseController->deleteChapter($courseName,$chapterNumber);
   } 
}else if(isset($_POST["editCClearButton"])){
   $courseName="";
   $chapterNumber="";
}

?>

