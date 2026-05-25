<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_keamanan"
);

if(!$conn)
    {
        die("Koneksi gagal");
    }

    echo"Koneksi berhasil";

    ?>