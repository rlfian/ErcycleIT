<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eRecycleIT - Dashboard</title>

    <!-- CSS -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="../assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/icon.ico">
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- Sidebar -->
        <?php include("sidebarmenu.php"); ?>
        
        <!-- Header -->
        <?php include("header.php"); ?>

        <!-- Content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="x_content">
                  <div class="row">
                    <div class="col-md-12 text-center">     
                      <br><br> 
                      <h1><b>Selamat Datang, <?php echo $_SESSION['nama'];?></b></h1>
                      <p>Developed by <a href='#' target='_blank'>Santri Thursina</a></p>
                      <br><br>  
                    </div>

                    <!-- Data Perangkat -->
                    <?php 
                      include '../koneksi/koneksi.php';
                      $sql1 = "SELECT * FROM tb_suratmasuk WHERE disposisi1 = '".$_SESSION['nama']."' OR disposisi2 = '".$_SESSION['nama']."' OR disposisi3 = '".$_SESSION['nama']."'" ;  
                      $query1 = mysqli_query($db, $sql1);
                      $jumlah1 = mysqli_num_rows($query1);
                    ?>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-laptop"></i></div>
                        <div class="count"><?php echo $jumlah1; ?></div>
                        <h3>Perangkat Masuk</h3>
                        <p>Telah didaftarkan</p>
                      </div>
                    </div>

                    <!-- Perangkat Keluar -->
                    <?php 
                      $sql2 = "SELECT * FROM tb_suratkeluar WHERE nama_bagian = '".$_SESSION['nama']."'" ;  
                      $query2 = mysqli_query($db, $sql2);
                      $jumlah2 = mysqli_num_rows($query2);
                    ?>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-external-link"></i></div>
                        <div class="count"><?php echo $jumlah2; ?></div>
                        <h3>Perangkat Keluar</h3>
                        <p>Siap untuk didaur ulang</p>
                      </div>
                    </div>

                    <!-- Bagian/Unit -->
                    <?php 
                      $sql3 = "SELECT * FROM tb_bagian";  
                      $query3 = mysqli_query($db, $sql3);
                      $jumlah3 = mysqli_num_rows($query3);
                    ?>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count"><?php echo $jumlah3; ?></div>
                        <h3>Unit Terdaftar</h3>
                        <p>Bagian/Divisi pengelola perangkat</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Content -->

        <!-- Footer -->
        <footer>
          <div class="pull-right">
            eRecycleIT - Sistem Daur Ulang Perangkat IT
          </div>
          <div class="clearfix"></div>
        </footer>

      </div>
    </div>

    <!-- JS -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <script src="../assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <script src="../assets/vendors/skycons/skycons.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="../assets/vendors/DateJS/build/date.js"></script>
    <script src="../assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/build/js/custom.min.js"></script>

  </body>
</html>
