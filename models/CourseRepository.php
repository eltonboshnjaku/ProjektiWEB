<?php
include_once 'course.php';
include_once 'DBConnection.php';
class CourseRepository{
    private $connection;
    private $course;

    public function __construct(){
    
        $conn=new dataBaseConnection();
        $this->connection=$conn->startConnection();
    }

    public function createCourse(Course $course){
        $this->course=$course;
    
        $sql="INSERT INTO course (courseName,chapterNumber,title,head,body,photo) Values (:courseName,:chapterNumber,:title,:head,:body,:photo)";
    
         $courseName = $this->course->getName();
         $chapterNumber = $this->course->getChapterNum();
         $title = $this->course->getChapterTitle();
         $head = $this->course->getChapterHead();
         $body= $this->course->getChapterBody();
         $photo =$this->course->getChapterPhoto();
     
        $statement = $this->connection->prepare($sql);
      
    
        $statement->bindParam(":courseName",$courseName);
        $statement->bindParam(":chapterNumber",$chapterNumber);
        $statement->bindParam(":title",$title );
        $statement->bindParam(":head",$head);
        $statement->bindParam(":body",$body);
        $statement->bindParam(":photo",$photo);
        $statement->execute();
    }
}