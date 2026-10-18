<?php
session_start();
include "login/ceksession.php";
include "../koneksi/koneksi.php";

$id = $_GET['id_lokasi'];
$query = mysqli_query($db, "SELECT * FROM tb_lokasi WHERE id_lokasi='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Lokasi</title>
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
            <h2>Edit Lokasi Arsip</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form method="POST" action="proses/proses_editlokasi.php" class="form-horizontal">
              <input type="hidden" name="id_lokasi" value="<?php echo $data['id_lokasi']; ?>">
              <div class="form-group">
                <label class="control-label col-md-3">Nama Lokasi</label>
                <div class="col-md-6">
                  <input type="text" name="nama_lokasi" class="form-control" value="<?php echo $data['nama_lokasi']; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Keterangan</label>
                <div class="col-md-6">
                  <textarea name="keterangan" class="form-control"><?php echo $data['keterangan']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <a href="datalokasi.php" class="btn btn-default">Batal</a>
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php include "footer.php"; ?>
    </div>
  </div>
</body>
</html>
