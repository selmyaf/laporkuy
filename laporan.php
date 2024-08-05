<?php
session_start();
require_once 'koneksi.php';

// Query untuk mengambil data dari database
$query = "SELECT namalengkap, judullaporan, isilaporan FROM formulir";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskusi</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="shortcut icon" href="/002 applab/public/assets/img/laporkuy.png">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Winku-Social-Network-Corporate-Responsive-Template/Winku-Social-Network-Corporate-Responsive-Template/css/style.css">
    <link rel="stylesheet" href="Winku-Social-Network-Corporate-Responsive-Template/Winku-Social-Network-Corporate-Responsive-Template/css/responsive.css">
    <link href="logolaporkuy.png" rel="icon">
    <link href="Group 115.png" rel="apple-touch-icon">
</head>
    
<style>  
    .btn-right-top {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 999;
    }
    p {
        font-size: 18px;
        color: black;
    }
    .timeline {
        list-style: none;
        padding: 0;
        max-width: 600px;
        margin: auto;
    }
    .timeline-item {
        background: white;
        padding: 20px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
    .title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }
    .status {
        font-size: 12px;
        color: #999;
    }
    .content {
        color: #666;
        line-height: 1.5;
        margin-bottom: 15px;
    }
    .footer {
        font-size: 12px;
        color: #999;
    }
    .icon {
        margin-right: 5px;
    }
    .green {
        color: #2ecc71;
    }
    hr {
        border: none;
        height: 2px;
        background-color: #810000;
    }
    .section {
        background-color: white;
    }
    .central-meta.item {
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand img {
  max-width: auto;
  height: auto;
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
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="berita.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="beranda.php">Formulir</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="laporan.php">Diskusi</a></li>
                    <li class="nav-item">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari" aria-label="Search">
                            <button class="btn btn-outline-danger rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </li>
                </ul>
                <div class="ps-lg-5">
                    <button class="btn btn-danger rounded-circle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
    <section>
		
		<div class=" white-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
          <div class="row" id="page-contents">
						<?php
              require_once 'koneksi.php';
              $query = "SELECT *FROM aspirasi";
              $result = $conn->query($query);
              if ($result === false) {
                die("Terjadi kesalahan dalam eksekusi query: " . $conn->error);
                        }
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
							<div class="col-lg-8 mx-auto">
								<div class="loadMore">
								<div class="central-meta item " position=relative>
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="Winku-Social-Network-Corporate-Responsive-Template/Winku-Social-Network-Corporate-Responsive-Template/images/resources/friend-avatar10.jpg" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title=""><?php echo $row["namalengkap"]; ?></a></ins>
												<span><?php echo date("d M, Y"); ?></span>
											</div>
                      <div class="ps-lg-5">
                        <button class="btn btn-outline-danger rounded-pill btn-right-top" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="bi-menu-button"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="formupaspirasi.php?kode_aspirasi=<?php echo $row['kode_aspirasi']; ?>">Edit</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item"  href="detailaspirasi.php?kode_aspirasi=<?php echo $row['kode_aspirasi']; ?>">Detail</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item"  href="deleteaspirasi.php?kode_aspirasi=<?php echo $row['kode_aspirasi']; ?>">Delete</a></li>
                        </ul>
                      </div>
                      <div class="post-meta">
                        <img src="gambar/<?php echo $row['gambaras']; ?>" alt="">
                          <div class="we-video-info"></div>
												  <div class="description">
												  <p>
                            <?php echo $row["isiaspirasi"]; ?>
                          </p>
                          </div>
                        </div>
                      </div>

										  <div class="comments-section">
                        <ul class="comment-list">
													<div class="comet-avatar">
														<img src="Winku-Social-Network-Corporate-Responsive-Template/Winku-Social-Network-Corporate-Responsive-Template/images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title=</a></h5>
															<span><?php echo date("d M, Y"); ?></span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
                        <!-- PHP code for fetching comments -->
                            <?php
                            require_once 'koneksi.php';
                            $kode_aspirasi = $row['kode_aspirasi'];
                            $comment_query = "SELECT isikomentar FROM komentar WHERE kode_aspirasi = '$kode_aspirasi'";
                            $comment_result = $conn->query($comment_query);
                            if ($comment_result === false) {
                              die("Error in comment query: " . $conn->error);
                          }
                            if ($comment_result->num_rows > 0) {
                              echo '<ul class="comment-list">';
                              while ($comment_row = $comment_result->fetch_assoc()) {
                                echo '<li>' . $comment_row["isikomentar"] . '</li>';
                              }
                              echo '</ul>';
                          } else {
                              echo "<p>No comments found.</p>";
                          }
                          ?>
                        </ul>
                      </div>         
												<a class="post-comment">
                          <div class="comet-avatar">
                              <img src="images/resources/comet-1.jpg" alt="">
                          </div>
                          <div class="post-comt-box">
                              <form action="addkomentar.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="kode_aspirasi" value="<?php echo $row['kode_aspirasi']; ?>">
                                  <!-- Rest of your form elements -->
                                  <textarea placeholder="Post your comment" name="isikomentar"></textarea>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <button type="submit" class="btn" style="border: none; background: none;">
                                        <i class="bi-send"></i>
                                    </button>
                              </form>
                          </div>
                      </li>
											</ul>
										</div>
                    
									</div>
                  
								</div>
                
							</div>
						</div>	
					</div>
          <?php
          }
          } else {
            echo '<div style="text-align: center;">';
            echo '<img src="noasp.png" alt="No data" style="max-width: 100%;">';
            echo'<br><br>';
            echo '<h4><p>Tidak ada aspirasi saat ini!</p></h4>';
            echo '</div>';
          }
          $conn->close();  
          ?>
				</div>

			</div>
      
		</div>	
    
	</section>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
</body>
</html>

