<?php 
  include '../koneksi/koneksi.php';
  $sql = "SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['id']."'";                        
  $query = mysqli_query($db, $sql);
  $data = mysqli_fetch_array($query);
?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-recycle"></i> <span> eRecycleIT</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/<?php echo $data['gambar']; ?>" height="55" width="55" alt="Foto Admin" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2><?php echo $_SESSION['nama']; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Navigasi</h3>
        <ul class="nav side-menu">
          <li>
            <a><i class="fa fa-laptop"></i> Perangkat IT <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="dataarsip.php"><i class="fa fa-desktop"></i> Data Perangkat</a></li>
              <li><a href="inputarsip.php"><i class="fa fa-plus-circle"></i> Input Perangkat</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-map-marker"></i> Lokasi Drop-off <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="datasuratkeluar.php"><i class="fa fa-map-pin"></i> Data Lokasi</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-history"></i> Riwayat Daur Ulang <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="datasuratmasuk.php"><i class="fa fa-calendar-check-o"></i> Data Riwayat</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-comment"></i> Feedback <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="feedback.php"><i class="fa fa-comments-o"></i> Feedback Pengguna</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-user"></i> Manajemen Admin <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin.php"><i class="fa fa-user-circle"></i> Data Admin</a></li> 
            </ul>
          </li>
          <li>
          <a><i class="fa fa-users"></i> Pengguna <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="databagian.php"><i class="fa fa-list"></i> Lihat Pengguna</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- sidebar footer -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Keluar" href="logout.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /sidebar footer -->
  </div>
</div>
