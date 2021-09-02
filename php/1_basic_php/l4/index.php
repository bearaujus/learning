<?php

$arr = ['mx', 'yonex', 'jamet', 'jamet pisan'];
print_r($arr);
echo "<br>";

var_dump($arr);
echo "<br>";

echo ($arr[1]);
echo "<br>";

$arr[] = 'nakal';
$arr[] = 'nakal pisan';
print_r($arr);
echo "<br>";

var_dump($arr);
echo "<br>";

$mhs = [["1773021", "Timok Sylvia"], ["1773031", "Timok Haryo"]]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 0; $i < count($arr); $i++) : ?>
        <?= $arr[$i]; ?><br>
    <?php endfor ?><br><br>

    <?php foreach ($arr as $t) : ?>
        <?= $t; ?>
    <?php endforeach ?><br><br>

    <?php foreach ($arr as $t) {
        echo $t . " ";
    } ?><br><br>

    <?php foreach ($mhs as $m) {
        echo $m[0] . "-";
        echo $m[1] . "<br>";
    } ?><br><br>
</body>

</html>