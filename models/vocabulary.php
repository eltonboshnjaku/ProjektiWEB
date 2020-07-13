<?php

class Vocabulary{
    
    private $keyword;
    private $description;

    public function __construct($keyword,$description){
        
        $this->keyword=$keyword;
        $this->description=$description;
    }

    
    public function getKeyword(){
        return $this->keyword;
    }
    public function getDescription(){
        return $this->description;
    }
}