<?php

//Standard Output
echo "Haryo Bagas Assyafah";
echo "<br>";

echo 123;
echo "<br>";

echo true;
echo "<br>";

echo false;
echo "<br>";

print_r("Bear Au Jus");
echo "<br>";

var_dump("Bear Au Jus");
echo "<br>";

//Variable
$name = "Haryo";

echo "My name is $name";
echo "<br>";

echo 'My name is $name';
echo "<br>";

$number = 123;
echo "number : $number";
echo "<br>";

$bool = true;
echo "boolean : $bool";
echo "<br>";

//Operator
// Arithmetic (+ - * / %)
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

// Concat / String Joiner
$str1 = "1773031";
$str2 = "1773021";
echo $str1 . " " . $str2;
echo "<br>";

// Assigment (=, +=, -=, *=, /=, %=, .=)
$test = 5;
echo $test;
echo "<br>";

$test += 10;
echo $test;
echo "<br>";

$test -= 10;
echo $test;
echo "<br>";

$test *= 10;
echo $test;
echo "<br>";

$test /= 10;
echo $test;
echo "<br>";

$test %= 10;
echo $test;
echo "<br>";

$test = "Bear";
$test .= " Au ";
$test .= "Jus";
echo $test;
echo "<br>";

// Comparison (<, >, <=, >=, ==, !=)
$x = 5;
$y = 10;
var_dump($x < $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";

var_dump($x <= $y);
echo "<br>";

var_dump($x >= $y);
echo "<br>";

var_dump($x == $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

// Identity (===, !==)
var_dump(1 === "1");
echo "<br>";

var_dump(1 !== "1");
echo "<br>";

var_dump(1 == "1");
echo "<br>";

var_dump(1 != "1");
echo "<br>";

// Logic (&&, ||, !)
$mood = true;
$eat = false;

var_dump($mood && $eat);
echo "<br>";

var_dump($mood || $eat);
echo "<br>";

var_dump(!$eat);
echo "<br>";
