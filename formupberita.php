<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Berita</title>
    <link rel="shortcut icon" href="laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>


<?php
    require_once 'koneksi.php';
    $judulberita = $_GET['judulberita'];
    $sql = "SELECT * FROM berita where judulberita='$judulberita'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    ?>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                <img src="/public/assets/img/laporkuy.png" alt="" width="20%">
                <div class="">LaporKuy</div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                <li class="nav-item" ><a class="nav-link fw-medium active"
                                aria-current="page" href="pihakberwenang.php">Beranda</a></li>
                            <li class="nav-item" >
                                <a class="nav-link fw-medium" href="laporanmasuk.php">Laporan</a>
                            </li>
                        <li class="nav-item"><a class="nav-link fw-medium"
                                href="beritamasuk.php">Berita</a>
                        </li>
                    &nbsp;
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari"
                            aria-label="Search">
                        <button class="btn btn-outline-danger rounded-pill" type="submit"><i
                                class="bi bi-search"></i></button>
                    </form>
                </ul>
                <form class="ps-lg-5">
                    <!-- <button class="btn btn-lg btn-outline-danger rounded-pill order-0 disabled" type="submit">Masuk</button> -->
                    <button class="btn btn-danger rounded-circle"><i class="bi bi-person-fill"></i></button>
                </form>
            </div>
        </div>
    </nav>
   <br>
   <br>
   <br>
    <!-- navbar -->
    
       
<!-- jumbotron -->
<div class="container position-relative">
    <div class="card">
        <div class="card-body">
        

            <form action="updateberita.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judulberita" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="judulberita" name="judulberita"  readonly value="<?php echo $data['judulberita']; ?>">
                </div>

                <div class="mb-3">
                    <label for="isiberita" class="form-label">Isi Berita</label>
                    <input class="form-control" type="text" name="isiberita" value="<?php echo $data['isiberita']; ?>" placeholder="isiberita"></textarea>
                </div>
                
                
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Kategori*</label>
                    <select class="form-select" id="lokasi" name="kategoriberita" value="<?php echo $data['kategoriberita']; ?>" placeholder="isiberita">
                        <option value="">Pilih kategori</option>
                        <option value="perampokkan">Perampokkan</option>
                        <option value="penculikan">Penculikan</option>
                    </select>
                </div>
                <div class="mb-3">
    <label for="uploadFile" class="form-label">Unggah Gambar</label>
    <input type="file" class="form-control" id="uploadFile" name="gambar"  value="<?php echo $data['gambar']; ?>">
</div>


                <button type="submit" class="btn " name="privasi" style="Background-color: #F55767; color:white;">Update Berita</button>
            </form>
        </div>
    </div>
</div>



    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
    function toggleActive(id) {
    // Mengambil semua elemen tombol
    var buttons = document.querySelectorAll('.btn.btn-outline-danger');
    
    // Menghapus kelas 'active' dari semua tombol
    buttons.forEach(function(button) {
        button.classList.remove('active');
    });

    // Menambahkan kelas 'active' ke tombol yang diklik
    var clickedButton = document.getElementById(id);
    clickedButton.classList.add('active');
}
</script>

<script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
    function changeButtonStyle(buttonId) {
    var buttons = document.querySelectorAll('.btn.btn-outline-danger'); // Mengambil semua tombol

    buttons.forEach(function(button) {
        button.classList.remove('active'); // Menghapus kelas 'active' dari semua tombol
    });

    var clickedButton = document.getElementById(buttonId); // Tombol yang diklik
    clickedButton.classList.add('active'); // Menambahkan kelas 'active' ke tombol yang diklik
}
</script>



    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
        
</body>

</html>




