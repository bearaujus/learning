<?php

//Loop
// For
for ($i = 0; $i < 5; $i++) {
    echo "Haryo Bagas $i <br>";
}
echo "<br />";

// While
$i = 10;
while ($i < 5) {
    echo "Haryo Bagas $i <br>";
    $i++;
}
echo "<br />";

// Do While
$i = 10;
do {
    echo "Haryo Bagas $i <br>";
    $i++;
} while ($i < 5);

// For Each
$arr = [1, 2, 3, 4];
foreach ($arr as $number) {
    echo "$number <br>";
}

//Branching
$x = 20;
// if
if ($x > 10) {
    echo "x is higher than 10 <br>";
}

// else if
if ($x == 10) {
    echo "x is equals with 10 <br>";
} else if ($x > 10) {
    echo "x is higher than 10 <br>";
}

// else

if ($x < 10) {
    echo "x is lower than 10 <br>";
} else {
    echo "else";
}
