<?php

// Class Autoloading
require_once 'Utill/Fruit.php';

class Apple implements Fruit
{
    public function getFruitName()
    {
        return 'Apple';
    }

    public function eat()
    {
        return 'Crack.. Crack.. Crackk.. Ughh nice apple !';
    }
}
