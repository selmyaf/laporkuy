<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pihak Berwenang</title>
    <link rel="shortcut icon" href="laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
</head>


<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                <img src="laporkuy.png" alt="" width="20%">
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

    <section class="py-0" id="home">
        <div class="bg-holder"
            style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <!-- Lokasi -->
        <div class="container mt-8">
            <h1 class="fw-bold">Halo, pak!</h1>
            <div class="row g-3 mt-2">
                <div class="col">
                    <input type="text" class="form-control rounded-pill" placeholder="Masukkan Lokasi"
                        aria-label="First name">
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success rounded-pill">Cari</button>
                </div>
            </div>
        </div>

        <!-- Statistik -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h3 class="fw-semibold">Statistik Laporan</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card-body">
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h5 class="por-title">Penipuan </h5>
                                    <div class="por-txt">23 Kasus (40%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h5 class="por-title">Panggelapan</h5>
                                    <div class="por-txt">11 Kasus (24%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h5 class="por-title">Penganiayaan</h5>
                                    <div class="por-txt">30 Kasus (60%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h5 class="por-title">Pencurian</h5>
                                    <div class="por-txt">41 Kasus (90%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- tabel -->
    <div class="container py-5">
        <h3 class="fw-semibold">Detail Statistik Laporan </h3>
        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Daerah</th>
                <th scope="col">Kasus</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Bojongsoang</td>
                <td>Pencurian</td>
                <td>11 Kasus</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Dago</td>
                <td>Penganiayaan</td>
                <td>23 Kasus</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Geger Kalong</td>
                <td>Pencabulan</td>
                <td>4 Kasus</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Cibaduyut</td>
                <td>Penggelapan</td>
                <td>45 Kasus</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Setia Budi</td>
                <td>Balap Liar</td>
                <td>33 Kasus</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Bojongsoang</td>
                <td>Pencurian</td>
                <td>11 Kasus</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Dago</td>
                <td>Penganiayaan</td>
                <td>23 Kasus</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Geger Kalong</td>
                <td>Pencabulan</td>
                <td>4 Kasus</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Cibaduyut</td>
                <td>Penggelapan</td>
                <td>45 Kasus</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Setia Budi</td>
                <td>Balap Liar</td>
                <td>33 Kasus</td>
              </tr>

            </tbody>
          </table>

    </div>










    <script>
        let ctx = document.getElementById("myChart").getContext("2d");
        let myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember",
                ],
                datasets: [{
                        label: "Penipuan",
                        data: [2, 9, 3, 17, 6, 3, 7, 5, 1, 9, 7, 12],
                        backgroundColor: "rgba(255, 99, 71, 0.6)",
                    },
                    {
                        label: "Penggelapan",
                        data: [2, 2, 5, 5, 2, 1, 10, 2, 9, 3, 17, 6],
                        backgroundColor: "rgba(255, 99, 71, 1)",
                    },
                ],
            },
        });
    </script>

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>