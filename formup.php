


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="shortcut icon" href="/002 applab/public/assets/img/laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<style>
    .btn.btn-outline-danger:active {
    background-color: #F55767;
    color: white;
}
.form-input {
  width: 100%;
}
</style>

<body>
<?php
    require_once 'koneksi.php';
    $namalengkap = $_GET['namalengkap'];
    $sql = "SELECT * FROM formulir where namalengkap='$namalengkap'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    ?>

    <!-- navbar -->
    
&nbsp
<!-- jumbotron -->
<div class="container position-relative">
    <div class="card">
        <div class="card-body">
            <form action="update.php" method="post">
            <div class="mb-3">
                <label for="judullaporan" class="form-label">Judul Laporan*</label>
                <input type="text" class="form-control" name="judullaporan" readonly value="<?php echo $data['judullaporan']; ?>">
            </div>
                <div class="mb-3">
                    <label for="isiaporan" class="form-label">Isi Laporan*</label>
                    <input type="text" class="form-control" name="isilaporan" value="<?php echo $data['isilaporan']; ?>" placeholder="isilaporan"><br>
                </div>

                <button type="submit" class="btn " name="privasi" style="Background-color: #F55767; color:white;">Kirim Laporan</button>
            </form>
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


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>



