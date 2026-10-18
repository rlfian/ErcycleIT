<?php
session_start();
include "login/ceksession.php";
include "../koneksi/koneksi.php";

// Ambil ID dari URL
$id = $_GET['id_admin'];

// Query data admin
$query = mysqli_query($db, "SELECT * FROM tb_admin WHERE id_admin='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Admin | eRecycleIT</title>
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
          <h2>Edit Admin</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <form action="proses/editadmin.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
            <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">

            <div class="form-group">
              <label class="control-label col-md-3">Nama</label>
              <div class="col-md-6">
                <input type="text" name="nama" class="form-control" value="<?= $data['nama_admin'] ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-6">
                <input type="text" name="username" class="form-control" value="<?= $data['username_admin'] ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Password (kosongkan jika tidak diubah)</label>
              <div class="col-md-6">
                <input type="password" name="password" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Gambar</label>
              <div class="col-md-6">
                <img src="images/<?= $data['gambar'] ?>" width="80" class="img-thumbnail"><br><br>
                <input type="file" name="gambar" class="form-control">
                <input type="hidden" name="gambar_lama" value="<?= $data['gambar'] ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
