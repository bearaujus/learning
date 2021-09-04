<?php

class Utill
{
    // Declaring Static Variable
    public static $NAME = 'MY UTILL CLASS';

    // Declaring Static Function
    public static function multiply($x, $y)
    {
        return $x * $y;
    }
}

// Using Static Variable
echo Utill::$NAME;
echo '<br>';

// Using Static Function
echo Utill::multiply(2, 5);
echo '<br>';
