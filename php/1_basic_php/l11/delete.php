<?php

require 'db_connection.php';
$id = $_GET["id"];

if (delete($id) > 0) {
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
