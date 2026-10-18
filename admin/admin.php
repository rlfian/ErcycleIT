<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Admin | eRecycleIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- DataTables -->
  <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icon.ico">

  <!-- Custom Theme Style -->
  <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <!-- Sidebar -->
      <?php include("sidebarmenu.php"); ?>

      <!-- Header -->
      <?php include("header.php"); ?>

      <!-- Page Content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Data Admin</h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Admin <small>Terdaftar</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <?php
                  include '../koneksi/koneksi.php';
                  $sql = "SELECT * FROM tb_admin ORDER BY id_admin ASC";
                  $query = mysqli_query($db, $sql);
                  $total = mysqli_num_rows($query);

                  if ($total == 0) {
                    echo "<center><h4>Belum ada admin yang terdaftar.</h4></center>";
                  } else {
                  ?>
                  <!-- Tambahkan sebelum <table> -->
                  <a href="tambahadmin.php" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Admin</a>
                  <br><br>
                         
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                      echo "<tr>
                        <td>{$no}</td>
                        <td>{$data['nama_admin']}</td>
                        <td>{$data['username_admin']}</td>  
                        <td>{$data['password']}</td>
                        <td><img src='images/{$data['gambar']}' width='50' height='50' class='img-circle'></td>
                        <td>
                          <a href='editadmin.php?id_admin={$data['id_admin']}' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                          <a href='proses/hapusadmin.php?id_admin={$data['id_admin']}' onclick=\"return confirm('Yakin hapus admin ini?')\" class='btn btn-danger btn-xs' title='Hapus'><i class='fa fa-trash'></i></a>
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
      <!-- /Page Content -->

      <!-- Footer -->
      <footer>
        <div class="pull-right">
          eRecycleIT - Admin Panel
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /Footer -->

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
  <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../assets/vendors/jszip/dist/jszip.min.js"></script>
  <script src="../assets/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../assets/vendors/pdfmake/build/vfs_fonts.js"></script>
  <script src="../assets/build/js/custom.min.js"></script>
</body>
</html>
