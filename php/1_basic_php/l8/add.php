<?php

require 'db_connection.php';
if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "
        <script>
            alert('berhasil');
            document.location.href = 'index.php';
        </script>
        ";

    } else {
        echo "
        <script>
            alert('gagal');
        </script>
        ";
    }
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

<body>
    <h1>Add Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
        </ul>
        <button type="submit" name="submit">INSERT</button>
    </form>
</body>

</html>