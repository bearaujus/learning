<?php

class OOP implements Course
{
    private $courseName;
    private $courseDuration;
    private $teacher;

    public function __construct($courseDuration, $teacher)
    {
        $this->courseName = 'OOP';
        $this->courseDuration = $courseDuration;
        $this->teacher = $teacher;
    }

    public function setCourseDuration($duration)
    {
        $this->courseDuration = $duration;
    }

    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }

    public function getInfo()
    {
        return "$this->courseName | Duration : $this->courseDuration | Teacher : $this->teacher";
    }
}
