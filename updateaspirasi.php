

<?php
require_once "koneksi.php";
$kode_aspirasi = $_POST['kode_aspirasi'];
$namalengkap = $_POST['namalengkap'];
$isiaspirasi = $_POST['isiaspirasi'];
$kategori = $_POST['kategori'];
$gambaras = $_FILES['gambaras']['name'];

if (!empty($gambaras)) {
    $ekstensi_boleh = array('png', 'jpg', 'jpeg');
    $x = explode('.', $gambaras);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambaras']['tmp_name'];
    $angka_acak = rand(1, 999);
    $gambar_baru = $angka_acak . '-' . $gambaras;

    if (in_array($ekstensi, $ekstensi_boleh)) {
        move_uploaded_file($file_tmp, 'gambar/' . $gambar_baru);

        $sql = "UPDATE aspirasi SET
            kode_aspirasi = '$kode_aspirasi',
            isiaspirasi = '$isiaspirasi',
            kategori = '$kategori',
            gambaras = '$gambar_baru'
        WHERE kode_aspirasi = '$kode_aspirasi'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query Error: " . mysqli_errno($conn) . " -" . mysqli_error($conn));
        } else {
            header('Location: laporan.php');
            exit();
        }
    } else {
        echo "<script>alert('Ekstensi hanya bisa jpg, jpeg, atau png!');window.location='formupaspirasi.php';</script>";
    }
} else {
    echo "<script>alert('Mohon pilih file gambar terlebih dahulu!');window.location='formupaspirasi.php';</script>";
}
?>
