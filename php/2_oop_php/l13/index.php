<?php

// Class Autoloading
require_once 'Model/Apple.php';
require_once 'Model/Banana.php';
require_once 'Model/User.php';

$apple = new Apple();
echo $apple->getFruitName() . " | " . $apple->eat() . '<br>';

$banana = new Banana();
echo $banana->getFruitName() . " | " . $banana->eat() . '<br>';

$user = new User();
echo $user->getInfo();
