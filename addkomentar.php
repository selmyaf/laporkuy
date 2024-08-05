<?php
require_once 'koneksi.php';

$kode_aspirasi = $_POST['kode_aspirasi'];
$isikomentar = $_POST['isikomentar'];

 $sql = "INSERT INTO komentar (kode_aspirasi,isikomentar) 
VALUES ('$kode_aspirasi','$isikomentar')";

$result = mysqli_query($conn, $sql);

       

header('Location: laporan.php');
exit();
?>
