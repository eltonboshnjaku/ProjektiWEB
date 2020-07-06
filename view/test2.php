
          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include_once '../models/DBConnection.php';
          $conn=new dataBaseConnection();
          $connection=$conn->startConnection();
   
         $sql="SELECT * FROM course ";
         $stmt = $connection->query($sql);
   
       
        
         foreach($stmt as $row){
             
          $id= $row['id'];
          $courseName=$row['courseName'];
          $chapterNumber=$row['chapterNumber'];
           $title=$row['title'];
           $head=$row['head'];
           $body=$row['body'];
           $photo=$row['photo'];
           echo "<h1>$title</h1>";
         }
           ?>
          <h1><? echo $title;?></h1>
           <h3><?echo $head; ?></h3>
           <p><? echo $body; ?></p>
          <img src="" alt="">
</body>
</html>