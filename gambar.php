<?php
include ("koneksi.php");
if(isset($_GET['gambar'])){
    $query =mysqli_query($koneksi,"select * from gambar where gambar='".$_GET['gambar']."'");
    $row = mysqli_fetch_array($query);
    header("content-type:" . $row['gambar']);
    echo $row['gambar'];
} else {
    header("location: berita.php")
}