<?php
include "myconnection.php";

$id = $_POST['myid'];

$name = $_POST["myname"];
$address = $_POST["myaddress"];
$namalama = $_POST['namalama'];
$gambar = $_FILES['foto']['name'];
$tmpNama = $_FILES['foto']['tmp_name'];

$lokasiUpload = "img/";

move_uploaded_file($tmpNama, $lokasiUpload . $gambar);

unlink("img/" . $namalama);

$query = "UPDATE student SET name='$name',address = '$address',foto='$gambar' WHERE id=$id";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "gagal mengubah data <br>" . mysqli_error($connect);
}
mysqli_close($connect);
