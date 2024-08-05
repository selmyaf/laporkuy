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
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
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
    &nbsp &nbsp &nbsp

<!-- tabel -->
<div class="container py-5">
    <br>
        <h4 class="fw-semibold">Laporan Masuk </h4>
        <table class="table table-striped mt-5">
            <thead>
              <tr>
              <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Dokumen</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            require_once 'koneksi.php';
            // Ambil data dari database
            $query = "SELECT * FROM formulir"; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $counter = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
              <tr>
              <th scope="row"><?php echo $counter; ?></th> <!-- Kolom nomor urutan -->
                <td><?php echo $row["namalengkap"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["judullaporan"]; ?></td>
                <td><?php echo $row["isilaporan"]; ?></td>
                <td><?php echo $row["lokasi"]; ?></td>
                <td><?php echo $row["dokumen"]; ?></td>
                <td>
                    <select class="form-select" name="status_<?php echo $row['id']; ?>">
                        <option value="diterima">Diterima</option>
                        <option value="proses" selected>Proses</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </td>
              </tr>

            
              

              <?php
               $counter++; // Increment counter setiap kali looping
            }
        } else {
            // Jika tidak ada data, tampilkan pesan alternatif
            echo "<tr><td colspan='4'>Tidak ada data yang ditemukan</td></tr>";
        }
        ?>
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