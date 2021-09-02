<?php

require 'db_connection.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
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
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'] ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp'] ?>" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>" required>
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="email" name="email" id="email" value="<?= $mhs['email'] ?>" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>" required>
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
        </ul>
        <button type="submit" name="submit">SAVE</button>
    </form>
</body>

</html>