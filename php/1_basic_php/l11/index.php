<?php

require 'db_connection.php';
if (isset($_POST["search"])) {
    $model = search($_POST["keyword"]);
} else {
    $model = query("SELECT * FROM mahasiswa");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <form action="" method="post">
        <input type="search" name="keyword" placeholder="Enter Keyword" autofocus autocomplete="off" value="<?= isset($_POST["keyword"]) ? $_POST["keyword"] : "" ?>">
        <button type="submit" name="search">Search</button>
    </form>
    <a href="add.php">Add Data</a><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
            <th>action</th>
        </tr>
        <?php foreach ($model as $row) : ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nrp"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
                <td><img src="img/<?= $row["gambar"] ?>" alt="not found" style="width: 100px;"></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>