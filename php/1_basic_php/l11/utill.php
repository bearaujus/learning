<?php

function upload()
{
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $currFileName = $_FILES['gambar']['tmp_name'];

    // Extension Check
    $allowedExt = ['jpg', 'jpeg', 'png'];
    $currImgExt = explode('.', $fileName);
    $currImgExt = strtolower(end($currImgExt));

    // Filtering Extenstion
    if (!in_array($currImgExt, $allowedExt)) {
        echo "
        <script>
            alert('only .jpg .jpeg .png is allowerd')
        </script>
        ";
        return false;

    // Limiting Upload Size
    } elseif ($fileSize > 10000000) {
        echo "
        <script>
            alert('file size to large (max 10mb)')
        </script>
        ";
    } else {
        // Generating Random String For Filename
        $newFileName = uniqid() . '.' . $currImgExt;
        move_uploaded_file($currFileName, 'img/' . $newFileName);
    }
    return $newFileName;
}
