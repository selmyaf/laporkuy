<?php
require_once 'koneksi.php';

// Query untuk mengambil data dari database
$query = "SELECT namalengkap, judullaporan, isilaporan FROM formulir";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="logolaporkuy.png" rel="icon">
  <link href="Group 115.png" rel="apple-touch-icon">
<title>Laporan</title>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laporkuy</title>
    <link rel="shortcut icon" href="/002 applab/public/assets/img/laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<style>
    
    body {
    font-family: 'Poppins';
  }
  .navbar {
    background-color: #fff;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .navbar-logo {
    display: flex;
    align-items: center;
  }
  .navbar-logo img {
    height: 40px; /* Sesuaikan dengan ukuran logo Anda */
  }
  .navbar-logo span {
    margin-left: 10px;
    color: black;
    font-weight: bold;
    font-size: 20px; /* Perbaiki penulisan properti font-size */
  }
  .navbar-menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }
  .navbar-menu li {
    padding: 0 15px;
  }
  .navbar-menu a {
    text-decoration: none;
    color: #810000;
    font-weight: bold;
  }
  .navbar-menu a:hover {
    color: red;
  }
  .navbar-icons {
    display: flex;
  }
  .navbar-icons img {
    height: 40px; /* Sesuaikan dengan ukuran ikon Anda */
    margin-left: 10px;
  }
  .navbar-menu a:hover, 
  .navbar-menu a:active {
    background-color: #810000;
    color: white;
    border-radius: 7px;
  }
  .timeline {
    list-style: none;
    padding: 0;
    max-width: 600px;
    margin: auto;
  }
  .timeline-item {
    background: white;
    padding: 20px;
    margin-bottom: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
  }
  .title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
  }
  .status {
    font-size: 12px;
    color: #999;
  }
  .content {
    color: #666;
    line-height: 1.5;
    margin-bottom: 15px;
  }
  .footer {
    font-size: 12px;
    color: #999;
  }
  .icon {
    margin-right: 5px;
  }
  .green {
    color: #2ecc71;
  }
  hr {
  border: none;
  height: 2px;
  background-color: #810000; /* Mengatur warna menjadi merah */
}
</style>
</head>

<body>
<main class="main" id="top">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                    <img src="laporkuy.png" alt="" width="20%">
                    <div class="">LaporKuy</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active" aria-current="page" href="berita.php">Home</a>
                    </li>
                    <li class="nav-item" >
                        <b><a class="nav-link fw-medium" href="beranda.php" >Formulir</a><b>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link fw-medium" href="laporan.php">Forum</a>
                    </li>
                </ul>
                    <form class="ps-lg-5">
                        <!-- <button class="btn btn-lg btn-outline-danger rounded-pill order-0 disabled" type="submit">Masuk</button> -->
                        <button class="btn btn-danger rounded-circle"><i class="bi bi-person-fill"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        

        <!-- jumbotron -->
        <br>
        <br>
        <br>
        <br>

<ul class="timeline">
<?php
    // Periksa apakah ada hasil dari query
    if (mysqli_num_rows($result) > 0) {
        // Tampilkan data dari setiap baris
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <li class="timeline-item">
                <div class="header">
                    <span class="title"><?php echo $row["namalengkap"]; ?></span>
                    <span class="status green"><?php echo date("d M, Y"); ?> • Selesai</span>
                    <span class="actions">
                <a href="formup.php?namalengkap=<?php echo $row['namalengkap']; ?>">Edit</a>
                <a href="delete.php?namalengkap=<?php echo $row['namalengkap']; ?>">Delete</a>
                <a href="detaillaporan.php?namalengkap=<?php echo $row['namalengkap']; ?>">Detail</a>
            </span>
                    <span class="actions">
                
                </div>
                
                <div class="content">
                    <?php echo $row["judullaporan"]; ?><br>
                    <?php echo $row["isilaporan"]; ?>
                </div>
                <div class="footer">
                    <!-- Tambahkan ikon atau informasi lainnya sesuai kebutuhan -->
                </div>
            </li>
            <?php
        }
    } else {
        echo "Tidak ada laporan saat ini";
    }
    // Tutup koneksi ke database
    mysqli_close($conn);
    ?>
</ul>

<script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>
</html>