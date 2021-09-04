<?php

// Class Autoloading
require_once 'Utill/User.php';

// Alliasing Namespace
use l13\Utill\User as UserInterfaces;

class User implements UserInterfaces
{
    public function getInfo()
    {
        echo 'User Info : Namespaces';
    }
}
