<?php
include_once '../controller/VocabularyController.php';

$vocabularyError=$keyword=$description=$courseName="";


if(isset($_POST['sbmButton'])){
    if( empty($_POST["keyword"]) || empty($_POST["description"])){
       $vocabularyError="All field are required!";
    }else{
     
        $keyword=strtolower($_POST["keyword"]);
        $description=$_POST["description"];
        

        $vController = new VocabularyController();
        $word=$vController->getWord($keyword);
        if($word == null){
            $vController->insertWord($keyword,$description);
        }else{
            
            $vocabularyError="This word exist in vocabulary!";
        }
        
    }
}
$correctWord=$correctDescription="";
$searchFieldError=$null="";
if(isset($_POST["searchButton"])){

    if(empty($_POST["searchField"])){
        $searchFieldError="Write something to search!";
    }else{
        $kword=strtolower($_POST["searchField"]); 
        $vocabularyController= new VocabularyController();
        $word=$vocabularyController->getWord($kword);
   
        if($word == null){
        $null="This word does not exist in our vocabulary!";
        }else{
            $correctWord=ucfirst( $word->getKeyword());
            $correctDescription=$word->getDescription();
        }
        
    }
    

}
$editWordError="";
$delKeyword="";
if(isset($_POST["delButton"])){
    if(empty($_POST["Kword"])){
        $editWordError="Please write a word!";
    }else{
        
        $vController = new VocabularyController();
        $word=$vController->getWord(strtolower($_POST["Kword"]));

        if($word == null){
            $editWordError="This word does not exist!";
        }else{
            $delKeyword=$_POST["Kword"];

            $vController->deleteWord($delKeyword);
        }
    }
}