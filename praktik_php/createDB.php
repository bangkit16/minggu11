<?php
$hostname = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname, $username, $password);

if ($connect) {
    echo "Koneksi ke MySQL berhasil <br>";
} else {
    echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
}

$query = "CREATE DATABASE web_db";

if (mysqli_query($connect, $query)) {
    echo "Database berhasil dibuat";
} else {
    echo "Database gagal dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);
