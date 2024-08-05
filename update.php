<?php
require_once "koneksi.php";

$judullaporan = $_POST['judullaporan'];
$isilaporan = $_POST['isilaporan'];


// Gunakan prepared statement untuk mencegah SQL injection
$stmt = mysqli_prepare($conn, "UPDATE formulir SET isilaporan=? WHERE judullaporan=?");
mysqli_stmt_bind_param($stmt, "ss", $isilaporan, $judullaporan);
mysqli_stmt_execute($stmt);

// Periksa apakah query berhasil dijalankan
if(mysqli_stmt_affected_rows($stmt) > 0) {
    // Redirect ke halaman laporan jika terjadi pembaruan data
    header('location: profil.php');
} else {
    // Tampilkan pesan error atau lakukan penanganan sesuai kebutuhan jika tidak ada data yang terupdate
    echo "Gagal memperbarui data";
}

// Tutup statement
mysqli_stmt_close($stmt);

// Tutup koneksi ke database
mysqli_close($conn);
?>
