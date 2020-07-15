<?php

include_once 'vocabulary.php';
include_once 'DBConnection.php';

class VocabularyRepository{
    private $connection;
    private $vocabulary;

    public function __construct(){
        $conn= new dataBaseConnection();
        $this->connection = $conn->startConnection();
    }
    

    public function insertWord(Vocabulary $vocabulary){

        $this->vocabulary=$vocabulary;

        $sql = "INSERT INTO vocabulary (keyword,description) VALUES (:keyword,:description)";
       
        $keyword=$this->vocabulary->getKeyword();
        $description=$this->vocabulary->getDescription();

        $statement= $this->connection->prepare($sql);

      
        $statement->bindparam(":keyword",$keyword);
        $statement->bindparam(":description",$description);

        $statement->execute();
    }

    function getWord($word){
           $sql="SELECT * FROM vocabulary WHERE keyword like'$word' ";

           $statement=$this->connection->query($sql);

           foreach($statement as $row){
               $keyword=$row['keyword'];
               $description=$row['description'];

               $correctWord=new Vocabulary($keyword,$description);
               return $correctWord;
           }
    }

    function deleteWord($word){
        $sql="DELETE  FROM vocabulary WHERE keyword='$word'";

        $statement=$this->connection->prepare($sql);
        $statement->execute();
    }



    public function getWords(){
   
        $sql="SELECT * FROM vocabulary";
       $stmt = $this->connection->query($sql);
   
        echo 
        '<table width="100%" border="1" style="color:rgb(241, 166, 4); " >
        <tr>
        <th style="background:rgb(34, 33, 33);">ID:</th>
        <th style="background:rgb(34, 33, 33);">KEYWORD:</th>
        <th style="background:rgb(34, 33, 33);">DESCRIPTION:</th>
       
        </tr>';
   
        foreach($stmt as $row){
            echo '
            <tr>
            <td style="background:white; text-align: center; color:black;">'.$row['id'].'</td>
            <td style="background:white; text-align: center; color:black;">'.$row['keyword'].'</td>
            <td style="background:white; color:black;">'.$row['description'].'</td>
           
   
   
            </tr>';
        }
    echo '</table>';
   
    }

   
}