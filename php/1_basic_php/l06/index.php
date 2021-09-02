<?php

// Superglobal Variables (type : associative array)
//Get
var_dump($_GET);
echo "<br>";

//Post
var_dump($_POST);
echo "<br>";
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
    <!-- Test Drive Get -->
    <a href="get.php?nrp=1773031&name=haryo">Test Get</a>

    <!-- Test Drive Post -->
    <form action="post.php" method="post">
        <input type="number" class="form-control" id="nrp" name="nrp" placeholder="NRP" required>
        <button type="submit">Test Post</button>
    </form>
</body>

</html>