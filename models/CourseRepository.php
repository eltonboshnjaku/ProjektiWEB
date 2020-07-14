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

    public function getCourse($cName){
        //  $conn=new dataBaseConnection();
        //  $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course ";
         $stmt = $this->connection->query($sql);
   
        //  $stmt->execute(
        //               array(
        //                   'courseName' => $cName
                        
        //            )
        //               );
        
         foreach($stmt as $row){
             
          $id= $row['id'];
          $courseName=$row['courseName'];
          $chapterNumber=$row['chapterNumber'];
           $title=$row['title'];
           $head=$row['head'];
           $body=$row['body'];
           $photo=$row['photo'];
           $course= new Course($courseName,$chapterNumber,$title,$head,$body,$photo);
           return $course;
    }
}

public function deleteChapter($courseN,$chapterNum){
   
    
    $sql="DELETE FROM course WHERE courseName='$courseN' and chapterNumber='$chapterNum'";

 
    $statement = $this->connection->prepare($sql);
  

    
    $statement->execute();
}


public function getCourses(){
   
    $sql="SELECT * FROM course";
   $stmt = $this->connection->query($sql);

    echo 
    '<table width="100%" border="1" style="color:rgb(241, 166, 4);  " >
    <tr>
    <th style="background:rgb(34, 33, 33);">ID:</th>
    <th style="background:rgb(34, 33, 33);">COURSE NAME:</th>
    <th style="background:rgb(34, 33, 33);">CHAPTER NUMBER:</th>
    <th style="background:rgb(34, 33, 33);">TITLE:</th>
   
   
    </tr>';

    foreach($stmt as $row){
        echo '
        <tr>
        <td style="background:white; text-align: center; color:black;">'.$row['id'].'</td>
        <td style="background:white; text-align: center; color:black; ">'.$row['courseName'].'</td>
        <td style="background:white; text-align: center; color:black; ">'.$row['chapterNumber'].'</td>
        <td style="background:white; text-align: center; color:black;">'.$row['title'].'</td>
       


        </tr>';
    }
echo '</table>';

}
}