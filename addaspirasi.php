<?php
require_once 'koneksi.php';

$kode_aspirasi = $_POST['kode_aspirasi'];
$namalengkap = $_POST['namalengkap'];
$isiaspirasi = $_POST['isiaspirasi'];
$kategori = $_POST['kategori'];
$gambaras = $_FILES['gambaras']['name']; // Gunakan 'name' dari $_FILES untuk mendapatkan nama berkas

if(!empty($gambaras)) {
    $ekstensi_boleh = array('png', 'jpg', 'jpeg');
    $x = explode('.', $gambaras);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambaras']['tmp_name'];
    $angka_acak = rand(1, 999);
    $gambar_baru = $angka_acak . '-' . $gambaras;

    if(in_array($ekstensi, $ekstensi_boleh)) {
        move_uploaded_file($file_tmp, 'gambar/' . $gambar_baru);

        // Perbaikan format query SQL, pisahkan nilai dengan koma (,) bukan titik (.)
        $sql = "INSERT INTO aspirasi (kode_aspirasi,namalengkap, isiaspirasi, kategori, gambaras) 
        VALUES ('$kode_aspirasi','$namalengkap', '$isiaspirasi', '$kategori', '$gambar_baru')";

        $result = mysqli_query($conn, $sql);

        if(!$result) {
            die("Query Error: " . mysqli_errno($conn) . " -" . mysqli_error($conn));
        } else {
            echo "<script>alert('Berhasil!');window.location='laporan.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi hanya bisa jpg, jpeg, atau png!');window.location='formaspirasi.php';</script>";
    }
} else {
    echo "<script>alert('Mohon pilih file gambar terlebih dahulu!');window.location='formaspirasi.php';</script>";
}

header('Location: laporan.php');
exit();
?>
