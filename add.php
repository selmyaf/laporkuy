<?php
require_once 'koneksi.php';

// Menangani input dari form
$namalengkap = mysqli_real_escape_string($conn, $_POST['namalengkap']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$judullaporan = mysqli_real_escape_string($conn, $_POST['judullaporan']);
$isilaporan = mysqli_real_escape_string($conn, $_POST['isilaporan']);
$lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
$dokumen = mysqli_real_escape_string($conn, $_POST['dokumen']);
$privasi = mysqli_real_escape_string($conn, $_POST['privasi']);

// Prepared statement untuk melakukan query ke database
$stmt = mysqli_prepare($conn, "INSERT INTO formulir (namalengkap, email, judullaporan, isilaporan, lokasi, dokumen, privasi) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind parameter ke query
mysqli_stmt_bind_param($stmt, "sssssss", $namalengkap, $email, $judullaporan, $isilaporan, $lokasi, $dokumen, $privasi);

// Eksekusi prepared statement
mysqli_stmt_execute($stmt);

// Redirect ke halaman beranda setelah query dijalankan
header('Location: beranda.php');
exit();
?>

