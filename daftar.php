<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>LaporKuy - Daftar</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <!-- Favicons -->
                                <link href="logolaporkuy.png" rel="icon">
                                <link href="Group 115.png" rel="apple-touch-icon">
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: white; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: white; 
                                }  body {
            color: #000;
            overflow-x: hidden;
            height: 100vh; 
            background-color: white;
            display: flex;
            justify-content: center; 
            align-items: center; 
        }


.card2 {
    margin: 0px 40px;
    
    
}

.image {
    width: 210px;
    height: 240px;
    
}

.border-line {
    border-right: 1px solid #EEEEEE;
}

.facebook {
    border: 1px solid grey;
    color: black;
    font-size: 20px;
    padding-top: 5px;
    width: 110px;
    height: 40px;
    cursor: pointer;
    border-radius: 10%;
}

.twitter {
    border: 1px solid grey;
    color: black;
    font-size: 20px;
    padding-top: 5px;
    width: 110px;
    height: 40px;
    cursor: pointer;
    border-radius: 10%;
}

.google {
    border: 1px solid grey;
    color: black;
    font-size: 20px;
    padding-top: 5px;
    width: 110px;
    height: 40px;
    cursor: pointer;
    border-radius: 10%;
}


.line {
    height: 1px;
    width: 35%;
    background-color: #E0E0E0;
    margin-top: 10px;
}

.or {
    width: 30%;
    font-weight: bold;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input, textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: black;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color: gray;
    cursor: pointer;
}

.btn-blue {
    background-color: #810000;
    width: 700px;
    color: #fff;
    border-radius: 2px;
}

.btn-blue:hover {
    background-color: #810000;
    cursor: pointer;
}


@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px;
    }

    .image {
        width: 300px;
        height: 220px;
    }

    .border-line {
        border-right: none;
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px;
        position: absolute
    }
    h2 {
        font-size: 18px;
    }
    a {
        font-size: 12px;
        color: grey;
    }
   
}

</style>
                                </head>
                                <body className='snippet-body'>
                                <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="row d-flex">
            <div class="col-lg-4">
                <BR><BR><BR><BR><BR><h2>Daftar dan Bagikan Cerita Anda Ke Orang Lain</h2><BR>
                <a>Lorem ipsum dolor sit amet consectetur. Nulla lorem tempus quis egestas.  </a>
            </div>            
            <div class="col-lg-1 offset-lg-1 d-flex align-items-center justify-content-center">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="undraw_sign_up_n6im (1) 1.png" class="image">
                    </div>
                </div>
            </div>
                <div class="col-lg-5 offset-lg-1">

                <?php

                require_once 'koneksi.php';
                if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $nik = $_POST['nik'];
                $notelp = $_POST['notelp'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($conn, "SELECT email FROM akun WHERE email = '$email'");

                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class = 'message'>
                    <p> Email sudah digunakan </p>
                    </div>";
                }
                else {
                    mysqli_query($conn,"INSERT INTO akun (email, nik, notelp, username, password) 
                    VALUES ('$email', '$nik', '$notelp', '$username', '$password')"  or die("error"));

                    echo "<div class = 'message'>
                    <p> Registrasi Berhasil </p>
                    </div>";
                }

                } else {

                    ?>
                    <form action="" method="post">
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6></label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6></label>
                            <input type="text" name="nik" placeholder="NIK">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6></label>
                            <input type="notelp" name="notelp" placeholder="No Telepon">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6></label>
                            <input type="username" name="username" placeholder="Username">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm"></h6></label>
                            <input type="password" name="password" placeholder="Kata Sandi">
                        </div>
                    <BR>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                            <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                        </div>
                        <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3">
                        <input type="submit" class="btn btn-blue text-center">Login</button>
                    </div>
                </form>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <small class="or text-center">Atau Masuk Dengan</small>
                        <div class="line"></div>
                    </div>
                    <div class="row mb-4 px-3  justify-content-center">
                        <div class="facebook text-center mr-3"><div class="fa fa-facebook"></div></div>
                        <div class="twitter text-center mr-3"><div class="fa fa-twitter"></div></div>
                        <div class="google text-center mr-3"><div class="fa fa-google"></div></div>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Sudah Punya Akun? <a class="text-danger " href = "masuk.php">Masuk</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'></script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>