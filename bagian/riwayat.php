<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Riwayat Daur Ulang | eRecycleIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icon.ico">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <?php include("sidebarmenu.php"); ?>
      <?php include("header.php"); ?>

      <div class="right_col" role="main">
        <div class="page-title">
          <div class="title_left">
            <h3>Riwayat Daur Ulang</h3>
          </div>
        </div>
        <div class="clearfix"></div>

        <!-- Riwayat Barang Masuk (Terhapus) -->
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Barang Elektronik Masuk (Terhapus)</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable1" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Tanggal Masuk</th>
                      <th>Kategori</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM tb_riwayat WHERE status = 'hapus' ORDER BY id_riwayat DESC";
                    $query = mysqli_query($db, $sql);

                    if (!$query) {
                      echo "<tr><td colspan='5'><center>Data tidak ditemukan: " . mysqli_error($db) . "</center></td></tr>";
                    } else {
                      $no = 1;
                      while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$data['nama_barang']}</td>
                                <td>{$data['tanggal_masuk']}</td>
                                <td>{$data['kategori']}</td>
                                <td>{$data['keterangan']}</td>
                              </tr>";
                        $no++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Riwayat Barang Keluar (Terhapus) -->
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Barang Elektronik Keluar (Terhapus)</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable2" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Tanggal Keluar</th>
                      <th>Tujuan</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_riwayat WHERE status = '' ORDER BY inputsuratmasuk.php DESC";
                    $query = mysqli_query($db, $sql);

                    if (!$query) {
                      echo "<tr><td colspan='5'><center>Data tidak ditemukan: " . mysqli_error($db) . "</center></td></tr>";
                    } else {
                      $no = 1;
                      while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$data['nama_barang']}</td>
                                <td>{$data['tanggal_keluar']}</td>
                                <td>{$data['tujuan']}</td>
                                <td>{$data['keterangan']}</td>
                              </tr>";
                        $no++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>

      <footer>
        <div class="pull-right">
          eRecycleIT - Sistem Manajemen Daur Ulang Elektronik
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>

  <!-- JS -->
  <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../assets/build/js/custom.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#datatable1').DataTable();
      $('#datatable2').DataTable();
    });
  </script>
</body>
</html>
