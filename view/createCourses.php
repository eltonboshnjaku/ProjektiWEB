<?php
include_once '../controller/CourseController.php';


if(isset($_POST["saveButton"])){
   $courseName=$_POST["courseName"];
   $chapterNumber=$_POST["chapterNumber"];
   $chapterTitle=$_POST["courseTitle"];
   $chapterHeader=$_POST["courseHeader"];
   $chapterBody=$_POST["courseBody"];
   $chapterPhoto=$_POST["fileInput"];

   $courseController = new CourseController();
   $courseController->createCourse($courseName,$chapterNumber, $chapterTitle, $chapterHeader, $chapterBody,$chapterPhoto);
    
   
}