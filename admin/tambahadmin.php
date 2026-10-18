<?php
session_start();
include "login/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Admin | eRecycleIT</title>
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("sidebarmenu.php"); ?>
    <?php include("header.php"); ?>
    <div class="right_col" role="main">
      <div class="x_panel">
        <div class="x_title">
          <h2>Tambah Admin</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form action="proses/tambahadmin.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3">Nama</label>
              <div class="col-md-6">
                <input type="text" name="nama" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-6">
                <input type="text" name="username" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Password</label>
              <div class="col-md-6">
                <input type="password" name="password" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Foto</label>
              <div class="col-md-6">
                <input type="file" name="gambar" accept="image/*" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="admin.php" class="btn btn-default">Batal</a>
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