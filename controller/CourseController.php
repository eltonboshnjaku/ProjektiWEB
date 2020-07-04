<?php

include_once '../models/course.php';
include_once '../models/CourseRepository.php';
class CourseController{
    


    public function createCourse($name,$chapterNumber, $chapterTitle,$chapterHead,$chapterBody,$photo){

        $course= new Course($name,$chapterNumber, $chapterTitle,$chapterHead,$chapterBody,$photo);
        $courseRepository = new CourseRepository();
        $courseRepository->createCourse( $course);

    }
}