<?php
  include_once '../models/DBConnection.php';

   function autocomplete(){
           if(isset($_POST["searchField"])){

                 $conn= new dataBaseConnection();
                 $connection = $conn->startConnection();
              
                 $word=$_POST["searchField"];
                 $sql="SELECT * FROM vocabulary WHERE keyword like'$word%' ";
              
                 $statement=$connection->query($sql);
               
                 foreach($statement as $row){
                   $keyword=$row['keyword'];
      
         echo $keyword;
               }

          }else{
                echo 'spo bon';   
          }
       
   }
  
  ?>