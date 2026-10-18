<?php
session_start();
include "login/ceksession.php";
include "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Lokasi</title>
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include("sidebarmenu.php"); ?>
      <?php include("header.php"); ?>

      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Data Lokasi Penyimpanan</h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daftar Lokasi</h2>
                  <div class="clearfix"></div>
                </div>

                <a href="inputlokasi.php" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Lokasi</a>
                <div class="x_content">
                  <?php
                    $sql = "SELECT * FROM tb_lokasi ORDER BY id_lokasi ASC";
                    $query = mysqli_query($db, $sql);
                    if (mysqli_num_rows($query) == 0) {
                      echo "<center><h4>Belum ada data lokasi.</h4></center>";
                    } else {
                  ?>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lokasi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$data['nama_lokasi']}</td>
                                <td>{$data['keterangan']}</td>
                                <td>
                                  <a href='editlokasi.php?id_lokasi={$data['id_lokasi']}' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i></a>
                                  <a href='proses/proses_hapuslokasi.php?id_lokasi={$data['id_lokasi']}' onclick=\"return confirm('Yakin hapus lokasi ini?')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a>
                                </td>
                              </tr>";
                        $no++;
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

      <footer>
        <div class="pull-right">
          Arsip Surat - Kota Samarinda
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>

  <!-- Script -->
  <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/build/js/custom.min.js"></script>
</body>
</html>
