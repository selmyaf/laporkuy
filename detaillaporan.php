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

        if (isset($_GET['namalengkap'])) {
            $namalengkap = $_GET['namalengkap'];

            // Ambil data sesuai dengan namalengkap dari parameter URL
            $query = "SELECT * FROM formulir WHERE namalengkap=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $namalengkap);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                
                    <div class="card-body">
                        <h2 class="card-title" style="color:  #F55767;">Detail Laporan</h2><br>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namalengkap" value="<?php echo htmlspecialchars($row['namalengkap']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="judullaporan" class="form-label">Judul Laporan*</label>
                        <input type="text" class="form-control" id="keterangan" name="judullaporan" value="<?php echo htmlspecialchars($row['judullaporan']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="isiaporan" class="form-label">Isi Laporan*</label>
                        <textarea class="form-control" id="detailLaporan" name="isilaporan"><?php echo htmlspecialchars($row['isilaporan']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi*</label>
                        <textarea class="form-control" id="lokasi" name="lokasi"><?php echo htmlspecialchars($row['lokasi']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="uploadFile" class="form-label">Unggah Dokumen atau Foto</label>
                        <input type="file" class="form-control" id="uploadFile" name="dokumen" value="<?php echo htmlspecialchars($row['dokumen']); ?>">
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
