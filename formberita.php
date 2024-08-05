



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

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                <img src="logolaporkuy.png" alt="" width="20%">
                <div class="">LaporKuy</div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <li class="nav-item" ><a class="nav-link fw-medium active"
                                aria-current="page" href="berita.php">Beranda</a></li>
                            <li class="nav-item" >
                                <a class="nav-link fw-medium" href="beranda.php">Formulir</a>
                            </li>
                        <li class="nav-item"><a class="nav-link fw-medium"
                                href="laporan.php">Diskusi</a>
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
        <br>

<!-- jumbotron -->
<div class="container position-relative">
<div class="bg-holder"
            style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        <div class="card-body">
        <div class="col-12 mx-auto align-items-center text-center py-4">
            <a href="beranda.php" class="btn btn-outline-danger" id="option1" onclick="toggleActive('option1')">Laporan</a>
            <a href="formberita.php" class="btn btn-outline-danger" id="option2">Berita</a>
            <a href="formaspirasi.php" class="btn btn-outline-danger" id="option2" onclick="toggleActive('option2')">Aspirasi</a>
        </div>


            <form action="addberita.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judulberita" class="form-label">Judul Berita*</label>
                    <input type="text" class="form-control" id="judulberita" name="judulberita" required>
                </div>

                <div class="mb-3">
                    <label for="isiberita" class="form-label">Isi Berita*</label>
                    <textarea class="form-control" id="isiberita" name="isiberita" required></textarea>
                </div>


                <div class="mb-3">
                    <label for="uploadFile" class="form-label">Unggah Gambar</label>
                    <input type="file" class="form-control" id="uploadFile" name="gambar" required>
                </div>
                <button type="submit" class="btn " name="privasi" style="Background-color: #F55767; color:white;">Kirim Berita</button>
            </form>
        </div>
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


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
        
</body>

</html>



