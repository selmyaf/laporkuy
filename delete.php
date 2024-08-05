<?php
require_once 'koneksi.php';
$namalengkap = $_GET['namalengkap'];

$sql = "DELETE FROM formulir where namalengkap = '$namalengkap'";

mysqli_query($conn,$sql);
header('location: profil.php ');

