

<?php
require_once 'koneksi.php';

$email = $_POST['email'];
$nik = $_POST['nik'];
$notelp = $_POST['notelp'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa apakah email sudah ada di dalam database
$verify_query = mysqli_query($conn, "SELECT email FROM akun WHERE email = '$email'");

// Jika hasil query lebih dari 0, artinya email sudah terdaftar
if(mysqli_num_rows($verify_query) > 0){
    echo "<script>alert('Email Sudah Terdaftar!');window.location='daftar2.php';</script>";

} else {
    // Email belum terdaftar, maka tambahkan ke database

    $sql = "INSERT INTO akun (email, nik, notelp, username, password) 
    VALUES ('$email', '$nik', '$notelp', '$username', '$password')";

    // Eksekusi query untuk menambahkan data ke dalam database
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("<div class='message'>
            <p> Terjadi kesalahan saat melakukan pendaftaran </p>
        </div>");
    } else {
        header('Location: login.php'); // Arahkan ke halaman login setelah registrasi berhasil
        exit(); // Hentikan eksekusi kode selanjutnya
    }
}
?>

