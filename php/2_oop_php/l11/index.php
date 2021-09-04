<?php

abstract class Course
{
    private $courseName;
    private $courseDuration;

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    public function getCourseDuration()
    {
        return $this->courseDuration;
    }

    public function setCourseDuration($courseDuration)
    {
        $this->courseDuration = $courseDuration;

        return $this;
    }

    // Creating Abstract Method
    abstract public function getInfo();
}

// Extends an Abstract Method
class OOP extends Course
{
    private $teacher;
    
    public function __construct($courseDuration, $teacher)
    {
        $this->setCourseName('OOP');
        $this->setCourseDuration(5);
        $this->teacher = $teacher;
    }

    // Implementing Parent Abstract Method
    public function getInfo()
    {
        return parent::getCourseName() . ' | Duration : ' . parent::getCourseDuration() . " Hours | Teacher : $this->teacher";
    }
}

$course = new OOP(5, 'Haryo Bagas Assyafah');
echo $course->getInfo();
