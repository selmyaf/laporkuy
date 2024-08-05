

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
   $kode_aspirasi = $_GET['kode_aspirasi']; // Mengambil kode aspirasi dari URL atau sumber lainnya
   $sql = "SELECT * FROM aspirasi WHERE kode_aspirasi = '$kode_aspirasi'";
   $result = mysqli_query($conn, $sql);
   $data = mysqli_fetch_array($result);
   ?>
   

<body>

    <!-- navbar -->
    
       
<!-- jumbotron -->
<div class="container position-relative">
    <div class="card">
        <div class="card-body">
        

            <form action="updateaspirasi.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="kode_aspirasi" class="form-label">Kode Aspirasi</label>
                    <input type="text" class="form-control" id="kode_aspirasi" name="kode_aspirasi"  readonly value="<?php echo $data['kode_aspirasi']; ?>">
                </div>

                <div class="mb-3">
                    <label for="isiaspirasi" class="form-label">Isi Aspirasi</label>
                    <input class="form-control" type="text" name="isiaspirasi" value="<?php echo $data['isiaspirasi']; ?>" placeholder="isiaspirasi"></textarea>
                </div>
                
                
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori*</label>
                    <select class="form-select" id="lokasi" name="kategoriberita" value="<?php echo $data['kategori']; ?>" placeholder="kategori">
                        <option value="">Pilih kategori</option>
                        <option value="perampokkan">Perampokkan</option>
                        <option value="penculikan">Penculikan</option>
                    </select>
                </div>
                <div class="mb-3">
    <label for="uploadFile" class="form-label">Unggah Gambar</label>
    <input type="file" class="form-control" id="uploadFile" name="gambaras"  value="<?php echo $data['gambaras']; ?>">
</div>


                <button type="submit" class="btn " name="privasi" style="Background-color: #F55767; color:white;">Update Aspirasi</button>
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





