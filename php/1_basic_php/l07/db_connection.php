<?php

// Initialize Database Connection
$conn = mysqli_connect('localhost', 'root', '', 'mahasiswa');

function query($query)
{
    // Parameter (Connection, Query)
    global $conn;
    $ress = mysqli_query($conn, $query);

    // Check Error If Query Error
    if (!$ress) {
        echo mysqli_error($conn);
        return [];
    } else {
        $model = [];
        while ($data = mysqli_fetch_assoc($ress)) {
            $model[] = $data;
        }
        return $model;
    }
}
