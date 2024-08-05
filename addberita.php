<?php
require_once 'koneksi.php';

$judulberita = $_POST['judulberita'];
$isiberita = $_POST['isiberita'];
$kategoriberita = $_POST['kategoriberita'];
$gambar = $_FILES['gambar']['name']; 

if(!empty($gambar)) { // Ubah pengecekan ini menjadi tidak sama dengan kosong (empty)
    $ekstensi_boleh = array('png', 'jpg', 'jpeg'); // Ubah array ekstensi yang diperbolehkan
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $gambar_baru = $angka_acak . '-' . $gambar;

    if(in_array($ekstensi, $ekstensi_boleh)) { // Periksa apakah ekstensi ada dalam array yang diperbolehkan
        move_uploaded_file($file_tmp, 'gambar/' . $gambar_baru);

        $sql = "INSERT INTO berita (judulberita, isiberita, kategoriberita, gambar) 
        VALUES ('$judulberita', '$isiberita', '$kategoriberita', '$gambar_baru')";
        $result = mysqli_query($conn, $sql);

        if(!$result) {
            die("Query Error: " . mysqli_errno($conn) . " -" . mysqli_error($conn));
        } else {
            echo "<script>alert('Berhasil!');window.location='berita.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi hanya bisa jpg, jpeg, atau png!');window.location='beranda.php';</script>";
    }
} else {
    echo "<script>alert('Mohon pilih file gambar terlebih dahulu!');window.location='beranda.php';</script>";
}

header('Location: berita.php');
exit();
?>
