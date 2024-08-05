
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Laporan</title>
    <link rel="shortcut icon" href="laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<style>
    .btn.btn-outline-danger:active {
    background-color: #F55767;
    color: white;
}
</style>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
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
                <div class="ps-lg-5">
                        <button class="btn btn-danger rounded-circle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="profil.php">Profil Pengguna</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item"  session_start();session_destroy(); href="indexlpage.php">Logout</a></li>
                        </ul>
                    </div>
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
            <a href="beranda.php" class="btn btn-outline-danger" id="option1">Laporan</a>
            <a href="formberita.php" class="btn btn-outline-danger" id="option2">Berita</a>
            <a href="formaspirasi.php" class="btn btn-outline-danger" id="option2">Aspirasi</a>
            
        </div>
            <form action="add.php" method="post">
                <div class="mb-3">
                    <label for="judullaporan" class="form-label">Judul Laporan*</label>
                    <input type="text" class="form-control" id="keterangan" name="judullaporan" required>
                </div>
                <div class="mb-3">
                    <label for="isiaporan" class="form-label">Isi Laporan*</label>
                    <textarea class="form-control" id="detailLaporan" name="isilaporan" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi*</label>
                    <textarea class="form-control" id="lokasi" name="lokasi" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Kategori*</label>
                    <select class="form-select" id="lokasi" name="kategoriberita" required>
                        <option value="">Pilih kategori</option>
                        <option value="perampokkan">Perampokkan</option>
                        <option value="penculikan">Penculikan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="uploadFile" class="form-label">Unggah Dokumen atau Foto</label>
                    <input type="file" class="form-control" id="uploadFile" name="dokumen">
                </div>
            
                
                <button type="submit" class="btn " name="privasi" style="Background-color: #F55767; color:white;">Kirim Laporan</button>
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
    function changeButtonStyle(buttonId) {
    var buttons = document.querySelectorAll('.btn.btn-outline-danger'); // Mengambil semua tombol

    buttons.forEach(function(button) {
        button.classList.remove('active'); // Menghapus kelas 'active' dari semua tombol
    });

    var clickedButton = document.getElementById(buttonId); // Tombol yang diklik
    clickedButton.classList.add('active'); // Menambahkan kelas 'active' ke tombol yang diklik
}
</script>
<script>
function kirimLaporan() {
    // Kirim laporan ke server di sini (gunakan AJAX jika diperlukan)

    // Tampilkan pop-up saat laporan berhasil terkirim
    alert("Laporan berhasil terkirim!");
}
</script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>

