
<?php
session_start();
if (isset($_POST['masuk'])) {
    require_once 'koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT password FROM akun WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Membandingkan langsung kata sandi yang dimasukkan oleh pengguna dengan yang ada di database
        if ($password === $row['password']) {
            $_SESSION['email'] = $email;
            // Redirect setelah login berhasil
            header("Location: berita.php");
            exit();
        }
    }

    // Jika password tidak cocok atau ada kesalahan lainnya, tampilkan pesan kesalahan
    echo "<script>alert('Email atau Kata Sandi Salah!');window.location='login.php';</script>";
}
?>
