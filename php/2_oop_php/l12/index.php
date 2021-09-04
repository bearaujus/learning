<?php

// Creating Interface
interface Course
{
    public function setCourseDuration($duration);
    public function setTeacher($teacher);
    public function getInfo();
}

// Implementing Interface
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

    // Implementing Interface Methods
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

$course = new OOP(5, 'Haryo Bagas Assyafah');
echo $course->getInfo();
