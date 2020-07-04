<?php
class Course{
   private $id;
   private $name;
   private $chapterNumber;
   private $chapterTitle;
   private $chapterHead;
   private $chapterBody;
   private $photo;

   public function __construct($name,$chapterNumber, $chapterTitle,$chapterHead,$chapterBody,$photo){
       $this->name=$name;
       $this->chapterNumber=$chapterNumber;
       $this->chapterTitle=$chapterTitle;
       $this->chapterHead=$chapterHead;
       $this->chapterBody=$chapterBody;
       $this->photo=$photo;
   }

   public function getName(){
       return  $this->name;
   }
   public function getChapterNum(){
       return $this->chapterNumber;
   }
   public function getChapterTitle(){
       return  $this->chapterTitle;
   }
   public function getChapterHead(){
       return  $this->chapterHead;
   }
   public function getChapterBody(){
       return $this->chapterBody;
   }
   public function getChapterPhoto(){
       return $this->photo;
   }

   public function toString(){
       return 'Course: '.$this->name.", Chapter: ".$this->chapterNumber.": ".$this->chapterTitle;
   }
}