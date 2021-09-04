<?php

// Class Autoloading
require_once 'Utill/Fruit.php';

class Banana implements Fruit
{
    public function getFruitName()
    {
        return 'Banana';
    }

    public function eat()
    {
        return 'Nyom nyom nyomm.. Sweet banana !';
    }
}
