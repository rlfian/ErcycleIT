<?php
session_start();
include "koneksi/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eRecycleIT - Sistem Daur Ulang Perangkat IT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Daur Ulang Perangkat IT">
  <meta name="keywords" content="recycle, IT, elektronik, daur ulang">

  <!-- Styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/icon.ico">
<!-- jQuery -->
</head>

<body>
  <div class="loader"></div>
  <div id="myDiv">

    <!-- HEADER -->
    <div class="header">
      <div class="header" style="background: url('img/BANNER.png') no-repeat fixed; background-size: cover; min-height: 650px;">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top" style="color:rgb(0, 0, 0);">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="#">
                  <strong>eRecycleIT-</strong> <span class="logo-dec">Sistem Daur Ulang Perangkat IT</span>
                </a>
              </div>

              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#main-header">Beranda</a></li>
                  <li><a href="#feature">Tentang</a></li>
                  <li><a href="#feedback">Feedback</a></li>
                  <li><a href="https://ponpesthursina.id/" target="_blank">Pengembang</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-sign-in"></i> Masuk <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="admin/login/index.php"><i class="fa fa-user text-primary"></i> Masuk sebagai Admin</a></li>
                      <li><a href="bagian/login/index.php"><i class="fa fa-users text-success"></i> Masuk sebagai Pengguna</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <!-- Hero Section -->
        <div class="wrapper">
          <div class="container text-center">
            <div class="banner-info wow fadeIn delay-10s">
              <div class="logo">
                <img src="img/download-removebg-preview.png" alt="Logo recycle" />
              </div>
              <h3 class="bnr-sub-title" style="color: green;">eRecycleIT - Sistem Daur Ulang Perangkat IT</h3>
              <h3 class="bnr-sub-title"><span class="logo-dec" style="color: black;">UIN SUNAN GUNUNG DJATI</span></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HEADER -->

    <!-- TENTANG -->
  <section id="feature" class="section-padding py-5 text-dark" style="background-color:rgb(255, 255, 255);">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col-md-12">
        <h2 class="font-weight-bold mb-10">Tentang <span class="text-success">eRecycleIT</span></h2>
        <p class="lead">Sistem pengelolaan perangkat teknologi informasi (TI) bekas untuk mendukung prinsip <strong>Green IT</strong> dan pengurangan limbah elektronik (<em>e-waste</em>).</p>
      </div>
    </div>

    <!-- Tabel Penjelasan -->
    <div class="row justify-content-center mb-20">
  <div class="col-lg-20">
    <div class="table-responsive mx-auto" style="max-width: 1000px;">
      <table class="table table-bordered table-hover bg-white col-md-15">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Fitur</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Input Perangkat</strong></td>
            <td>Pengguna dapat menambahkan perangkat elektronik bekas seperti laptop, printer, dan lainnya yang ingin didaur ulang.</td>
          </tr>
          <tr>
            <td><strong>Lokasi Drop-off</strong></td>
            <td>Informasi titik pengumpulan perangkat daur ulang di berbagai wilayah secara real-time.</td>
          </tr>
          <tr>
            <td><strong>Pelacakan & Riwayat</strong></td>
            <td>Melacak proses dan status daur ulang perangkat, termasuk log aktivitas sebelumnya.</td>
          </tr>
          <tr>
            <td><strong>Feedback Pengguna</strong></td>
            <td>Memberikan saran, kritik, dan masukan terhadap sistem demi pengembangan yang berkelanjutan.</td>
          </tr>
          <tr>
            <td><strong>Dashboard Admin</strong></td>
            <td>Panel administrasi untuk mengelola seluruh data barang masuk/keluar, pengguna, serta laporan daur ulang.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

    <!-- SECTION: Feedback -->
<section id="feedback" class="section-padding bg-light py-5">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col-md-12">
        <h2 class="font-weight-bold mb-3">Masukan & Saran</h2>
        <p class="lead text-muted">Kami sangat menghargai pendapat Anda untuk pengembangan eRecycleIT.</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-15">
        <form action="simpan_feedback.php" method="POST">
          <div class="form-group">
            <label for="nama">Nama Anda</label>
            <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama Anda">
          </div>
          <div class="form-group">
            <label for="email">Email Aktif</label>
            <input type="email" name="email" class="form-control" required placeholder="email@contoh.com">
          </div>
          <div class="form-group">
            <label for="pesan">Masukan / Feedback</label>
            <textarea name="pesan" class="form-control" rows="5" required placeholder="Tulis pesan Anda di sini..."></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Kirim Masukan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row text-center mt-5">
      <div class="col-md-12">
        <p class="lead text-muted">Dikembangkan oleh <strong>Kelompok 1</strong> untuk mendukung ekosistem digital yang ramah lingkungan dan berkelanjutan.</p>
      </div>
    </div>
  </div>
</section>
    <!-- FOOTER -->
    <footer id="footer">
      <div class="container text-center">
        <p>&copy; Teknik Informatika. All Rights Reserved.</p>
        <div class="credits">
          Designed by <a href="https://ponpesthursina.id/">rlfiann_</a>
        </div>
      </div>
    </footer>
  </div>

  <!-- JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
