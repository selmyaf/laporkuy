<?php
require_once "koneksi.php";

$judulberita = $_POST['judulberita'];
$isiberita = $_POST['isiberita'];
$kategoriberita = $_POST['kategoriberita'];
$gambar = $_FILES['gambar']['name'];

if (!empty($gambar)) {
    $ekstensi_boleh = array('png', 'jpg', 'jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $gambar_baru = $angka_acak . '-' . $gambar;

    if (in_array($ekstensi, $ekstensi_boleh)) {
        move_uploaded_file($file_tmp, 'gambar/' . $gambar_baru);

        $sql = "UPDATE berita SET judulberita='$judulberita',
                            isiberita = '$isiberita',
                            kategoriberita = '$kategoriberita',
                            gambar = '$gambar_baru' 
                        WHERE judulberita = '$judulberita'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query Error: " . mysqli_errno($conn) . " -" . mysqli_error($conn));
        } else {
            header('Location: beritamasuk.php');
            exit();
        }
    } else {
        echo "<script>alert('Ekstensi hanya bisa jpg, jpeg, atau png!');window.location='formupberita.php';</script>";
    }
} else {
    echo "<script>alert('Mohon pilih file gambar terlebih dahulu!');window.location='formupberita.php';</script>";
}
?>
