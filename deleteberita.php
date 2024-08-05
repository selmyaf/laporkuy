<?php
require_once 'koneksi.php';
$judulberita = $_GET['judulberita'];

$sql = "DELETE FROM berita where judulberita='$judulberita'";

mysqli_query($conn,$sql);
header('location: beritamasuk.php ');