
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="shortcut icon" href="logolaporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <main class="main" id="top">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                    <img src="logolaporkuy.png" alt="" width="20%">
                    <div class="">LaporKuy</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active"
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
                            <li><a class="dropdown-item" href="indexlpage.php">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <!-- jumbotron -->
        <section class="py-0" id="home">
            <div class="bg-holder"
                style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container position-relative">
                <div class="row align-items-center py-6 mt-3">
                    <div class="col-md-5 col-lg-12 order-md-1 text-center">
                        <h1> <i class="bi bi-broadcast" style="color: red;"></i> Live Report</h1>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/9WzrG0G0uTw?si=RVO8NfMgKfmnkDEG"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lokasi -->
        <div class="container position-relative">
            <div class="row align-items-center py-4">
                <h1 class="fw-bold">Hai, User!</h1>
                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control rounded-pill" placeholder="Masukkan Lokasi"
                            aria-label="First name">
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-success rounded-pill">Cari</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik -->
        <div class="container">
            <div class="col-md-12 grid-margin stretch-card py-5">
                <div class="row">
                    <div class="col-md-6 col-xl-6 d-flex flex-column justify-content-start">
                        <div class="mt-3">
                            <p class="card-title">Detail Laporan Sekitar</p>
                            <h1 class="fw-bold">2.626 <div class="text-danger">Kasus</div>
                            </h1>
                            <h3 class="font-weight-500 mb-xl-4 ">Kota Bandung</h3>
                            <p class="mb-2 mb-xl-0">Kejahatan yang paling banyak terjadi adalah penipuan,
                                penggelapan, penganiayaan, dan pencurian. Waktu yang paling rawan adalah
                                siang hari dan lokasi paling rawan ada di permukiman.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6 d-flex flex-column justify-content-start mt-2">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <!-- berita -->
        <div class="py-4">
            <div class="container position-relative">
                <div class="row align-items-center py-4">
                    <h1 class="fw-semibold tex-light">Berita Terkini</h1>
                </div>
            </div>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner container">
                    <div class="carousel-item active">
                        <!-- konten satu -->
                        <div class="col-md-12">
                            <div class=" mb-2">
                                <div class=>
                                    <img src="/LaporKuy/public/assets/img/gallery/filip-mishevski-c5QdMcuFlgY-unsplash.jpg" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Penemuan Fosil Dinosaurus Terbesar di Selatan Amerika</h5>
                                    <p class="card-text">Para peneliti paleontologi baru-baru ini menemukan fosil dinosaurus sauropoda di Argentina bagian selatan. 
                                        Fosil ini, yang diyakini menjadi salah satu fosil terbesar yang pernah ditemukan di Amerika Selatan, memiliki panjang lebih dari 30 meter. Penemuan ini memberikan wawasan baru tentang kehidupan dinosaurus pada masa lalu dan dapat membantu dalam pemahaman evolusi mereka di benua tersebut.</p>
                                    <a href="#" class="btn btn-primary" style= "background-color:  #F55767; Border: none;">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- artikel dua -->
                        <div class="row g-5 mt-2">
                        <?php
                        require_once 'koneksi.php';

                        // Query untuk mengambil data dari database
                        $query = "SELECT judulberita, isiberita, gambar FROM berita";
                        $result = $conn->query($query);

                        if ($result === false) {
                            die("Terjadi kesalahan dalam eksekusi query: " . $conn->error);
                        }
                        if ($result->num_rows > 0) {
                            // Output data dari setiap baris
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                    <div>
                                    <img src="gambar/<?php echo $row['gambar'];?> " class="card-img-top" style="width: 100%; height: auto;">
                                    </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row["judulberita"]; ?></h5>
                                            <p class="card-text"><?php echo $row["isiberita"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "Tidak ada hasil yang ditemukan";
                        }
                        $conn->close();  
                        ?>

                    </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- footer -->
        <section class="py-5 bg-1000 mt-6">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-auto mb-5"><a
                            class="pe-2 d-flex align-items-center text-decoration-none fw-bold fs-3" href="#">
                            <div class="text-white">LaporKuy</div>
                        </a></div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto mb-5">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none"
                                    href="#!">Live</a>
                            </li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none"
                                    href="#!">Lokasi</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none"
                                    href="#!">Statistik</a>
                            </li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none"
                                    href="#!">Berita</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none"
                                    href="#!">Tentang</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" fill="#7D7987" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="#7D7987" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="32" fill="#7D7987" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>












    </main>







    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <script>
        var xValues = ["Penipuan", "Penggelapan", "Penganiayaan", "Pencurian", "Pencabulan"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            // options: {
            //     title: {
            //         display: true,
            //         text: "World Wide Wine Production 2018"
            //     }
            // }
        });
    </script>



    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>