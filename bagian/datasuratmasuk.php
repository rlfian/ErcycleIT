<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eRecycleIT - Data Perangkat Masuk</title>

  <!-- CSS -->
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icon.ico">
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      
      <?php include("sidebarmenu.php"); ?>
      <?php include("header.php"); ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Perangkat Masuk</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data <small>Perangkat Masuk</small></h2>
                  <div class="clearfix"></div>
                </div>

                <form action="downloadlaporan_suratmasuk.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                  <div class="col-md-2">
                    <select name="bulan" class="form-control">
                      <option value="">Bulan</option>
                      <?php
                        $bulan = ["01"=>"Januari", "02"=>"Februari", "03"=>"Maret", "04"=>"April", "05"=>"Mei", "06"=>"Juni", "07"=>"Juli", "08"=>"Agustus", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember"];
                        foreach ($bulan as $val => $label) {
                          echo "<option value='$val'>$label</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <select name="tahun" class="form-control">
                      <option value="">Tahun</option>
                      <?php for ($th=2020; $th<=date("Y"); $th++) echo "<option>$th</option>"; ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success"><i class="fa fa-download"></i> Unduh Laporan</button>
                  <a href="inputsuratmasuk.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Perangkat</a>
                </form>

                <div class="x_content">
                  <?php
                  include '../koneksi/koneksi.php';
                  $sql1 = "SELECT * FROM tb_suratmasuk WHERE disposisi1 = '".$_SESSION['nama']."' OR disposisi2 = '".$_SESSION['nama']."' OR disposisi3 = '".$_SESSION['nama']."'";
                  $query1 = mysqli_query($db, $sql1);
                  $total = mysqli_num_rows($query1);
                  
                  if ($total == 0) {
                    echo "<center><h4>Belum ada data perangkat masuk.</h4></center>";
                  } else {
                  ?>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Masuk</th>
                        <th>Kode Perangkat</th>
                        <th>Tanggal Pengadaan</th>
                        <th>Sumber</th>
                        <th>Nomor Perangkat</th>
                        <th>Tujuan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while($data = mysqli_fetch_array($query1)){
                        echo "
                        <tr>
                          <td>{$data['nomorurut_suratmasuk']}</td>
                          <td>{$data['tanggalmasuk_suratmasuk']}</td>
                          <td>{$data['kode_suratmasuk']}</td>
                          <td>{$data['tanggalsurat_suratmasuk']}</td>
                          <td>{$data['pengirim']}</td>
                          <td>{$data['nomor_suratmasuk']}</td>
                          <td>{$data['kepada_suratmasuk']}</td>
                          <td>{$data['perihal_suratmasuk']}</td>
                          <td class='text-center'>
                            <a href='surat_masuk/{$data['file_suratmasuk']}' class='btn btn-success btn-xs' title='Unduh'><i class='fa fa-download'></i></a>
                            <a href='detail-suratmasuk.php?id_suratmasuk={$data['id_suratmasuk']}' class='btn btn-info btn-xs' title='Detail'><i class='fa fa-file'></i></a>
                          </td>
                        </tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                  <?php } ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          eRecycleIT - Sistem Daur Ulang Perangkat IT
        </div>
        <div class="clearfix"></div>
      </footer>

    </div>
  </div>

  <!-- Scripts -->
  <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
  <script src="../assets/vendors/nprogress/nprogress.js"></script>
  <script src="../assets/vendors/iCheck/icheck.min.js"></script>
  <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../assets/vendors/jszip/dist/jszip.min.js"></script>
  <script src="../assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../assets/vendors/pdfmake/build/vfs_fonts.js"></script>
  <script src="../assets/build/js/custom.min.js"></script>
</body>
</html>
