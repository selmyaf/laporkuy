<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link rel="shortcut icon" href="laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <?php
        require_once 'koneksi.php';

        if (isset($_GET['kode_aspirasi'])) {
            $kode_aspirasi = $_GET['kode_aspirasi'];

            // Ambil data sesuai dengan namalengkap dari parameter URL
            $query = "SELECT * FROM aspirasi WHERE kode_aspirasi=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $kode_aspirasi);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                
                    <div class="card-body">
                        <h2 class="card-title" style="color:  #F55767;">Detail Aspirasi</h2><br>
                <form action="" method="post">
                    
                    <div class="mb-3">
                        <label for="judulberita" class="form-label">Nama Lengkap*</label>
                        <input type="text" class="form-control" id="keterangan" name="namalengkap" value="<?php echo htmlspecialchars($row['namalengkap']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="isiberita" class="form-label">Isi Laporan*</label>
                        <textarea class="form-control" id="detailLaporan" name="isiaspirasi"><?php echo htmlspecialchars($row['isiaspirasi']); ?></textarea>
                    </div>
                    <div class="mb-3">
    <label for="uploadFile" class="form-label">Gambar</label><br>
    <img src="gambar/<?php echo htmlspecialchars($row['gambaras']); ?>" alt="Nama Dokumen"  width="200" height="200">
</div>
                    <!-- Tambahkan elemen formulir lainnya di sini dengan cara yang sama -->
                    <!-- Gunakan htmlspecialchars untuk menghindari masalah keamanan XSS -->
                </form>
                <?php
            }
        }
        ?>
        </div>
        </div>
    </div>
</body>
</html>
