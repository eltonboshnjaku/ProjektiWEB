<?php

include_once '../models/vocabularyRepository.php';
include_once '../models/vocabulary.php';

class VocabularyController{

    public function insertWord($keyword,$description){
         $word= new Vocabulary($keyword,$description);
         $vocabularyRepository = new VocabularyRepository();
         $vocabularyRepository->insertWord($word);
    }

public function getWord($word){
    $vocabularyRepository = new VocabularyRepository();
     $correctWord=$vocabularyRepository->getWord($word);
     return $correctWord;
}

public function deleteWord($word){
    $vocabularyRepository=new VocabularyRepository();
    $vocabularyRepository->deleteWord($word);
}
}