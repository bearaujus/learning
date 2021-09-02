<?php

//Common Root Function
// Date
// https://www.php.net/manual/en/function.date.php
echo date("l, d-M-Y");
echo "<br>";

echo time();
echo "<br>";

$second2days = 60 * 60 * 24 * 2;
echo date("l, d-M-Y", time() + $second2days);
echo "<br>";

// Mktime (0,0,0,0,0,0)
// hour, minute, second, month, date of month, year
echo date("l, d-M-Y", mktime(0, 0, 0, 8, 23, 1999));
echo "<br>";

// strtotime
echo date("l, d-M-Y", strtotime("aug 23 1999"));
echo "<br>";

//Function
function test($name = "Admin", $time = "Morning")
{
    return "Good $time, $name!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Calling test Function -->
<body>
    <h1><?= test("Haryo", "Morning"); ?></h1>
    <h1><?= test(); ?></h1>
</body>

</html>