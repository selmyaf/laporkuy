
<?php
    require_once 'koneksi.php';

    // Periksa apakah kode_aspirasi ada di URL
    // Retrieve kode_aspirasi to be deleted
$kode_aspirasi = $_GET['kode_aspirasi'];

// Delete associated comments first
$delete_comments_query = "DELETE FROM komentar WHERE kode_aspirasi = $kode_aspirasi";
$result_comments = mysqli_query($conn, $delete_comments_query);

// Proceed with deleting aspirasi after associated comments are deleted
if ($result_comments) {
    $delete_aspirasi_query = "DELETE FROM aspirasi WHERE kode_aspirasi = $kode_aspirasi";
    $result_aspirasi = mysqli_query($conn, $delete_aspirasi_query);

    if ($result_aspirasi) {
        header('Location: laporan.php');
        exit();
    } else {
        // Error deleting aspirasi
        // Handle error or display error message
    }
} else {
    // Error deleting comments
    // Handle error or display error message
}

?>
