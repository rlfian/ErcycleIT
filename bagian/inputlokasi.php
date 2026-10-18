<?php
session_start();
include "login/ceksession.php";
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Lokasi</title>
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include "sidebarmenu.php"; ?>
      <?php include "header.php"; ?>

      <div class="right_col" role="main">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tambah Lokasi Arsip</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form method="POST" action="proses/proses_inputlokasi.php" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-3">Nama Lokasi</label>
                <div class="col-md-6">
                  <input type="text" name="nama_lokasi" class="form-control" required placeholder="Contoh: Rak A, Lantai 2">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Keterangan</label>
                <div class="col-md-6">
                  <textarea name="keterangan" class="form-control" placeholder="Keterangan tambahan (opsional)"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <a href="lokasi.php" class="btn btn-default">Batal</a>
                  <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
