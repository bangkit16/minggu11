<?php
include "myconnection.php";

$name = $_POST["myname"];
$address = $_POST["myaddress"];
$gambar = $_FILES['foto']['name'];
$tmpNama = $_FILES['foto']['tmp_name'];

$lokasiUpload = "img/";

move_uploaded_file($tmpNama, $lokasiUpload . $gambar);

$query = "INSERT into student(name,address,foto) 
    VALUES ('$name','$address','$gambar')
";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "Data baru gagal dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);
