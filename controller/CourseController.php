<?php

include_once '../models/course.php';
include_once '../models/CourseRepository.php';
class CourseController{
    


    public function createCourse($name,$chapterNumber, $chapterTitle,$chapterHead,$chapterBody,$photo){

        $course= new Course($name,$chapterNumber, $chapterTitle,$chapterHead,$chapterBody,$photo);
        $courseRepository = new CourseRepository();
        $courseRepository->createCourse( $course);

    }

    public function getCourse($cName){
        $courseRepository = new CourseRepository();
        $course=$courseRepository->getCourse($cName);
        return $course;
    }

    public function deleteChapter($courseN,$chapterNum){
        $courseRepository = new CourseRepository();
        $course=$courseRepository->deleteChapter($courseN,$chapterNum);

    }
}