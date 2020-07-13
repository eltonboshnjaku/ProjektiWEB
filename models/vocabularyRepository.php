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
}