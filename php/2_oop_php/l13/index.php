<?php

// Class Autoloading
require_once 'interface.php';
require_once 'oop.php';

$course = new OOP(5, 'Haryo Bagas Assyafah');
echo $course->getInfo();
