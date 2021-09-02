<?php

$mhs = [
    [
        "nama" => "Haryo",
        "nrp" => "1773031"
    ],
    [
        "nama" => "Timok",
        "nrp" => "1773021"
    ]
];

echo $mhs[0]["nama"];
echo $mhs[0]["nrp"];
echo $mhs[1]["nama"];
echo $mhs[1]["nrp"];
echo '<br>';
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
    <?php foreach ($mhs as $m) {
        echo $m['nrp'] . ' - ' . $m['nama'] . '<br>';
    } ?>
</body>

</html>