<?php 
  include '../koneksi/koneksi.php';
  $sql    = "SELECT * FROM tb_bagian WHERE id_bagian='".$_SESSION['id']."'";                        
  $query  = mysqli_query($db, $sql);
  $data   = mysqli_fetch_array($query);
?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-recycle"></i> <span>eRecycleIT</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/<?php echo $data['gambar']; ?>" height="55" width="55" alt="" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2><?php echo $_SESSION['nama'];?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Menu Utama</h3>
        <ul class="nav side-menu">
          <li>
            <a><i class="fa fa-laptop"></i> Data Perangkat <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="datasuratmasuk.php"><i class="fa fa-database"></i> Daftar Perangkat</a></li>
              <li><a href="inputsuratmasuk.php"><i class="fa fa-plus-circle"></i> Input Perangkat</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-map-marker"></i> Lokasi Drop-off <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="lokasi.php"><i class="fa fa-map"></i> Data Lokasi</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-clock-o"></i> Riwayat Daur Ulang <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="riwayat.php"><i class="fa fa-history"></i> Riwayat Perangkat</a></li>
            </ul>
          </li>

          <li>
            <a><i class="fa fa-comments"></i> Feedback <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="feedback.php"><i class="fa fa-commenting"></i> Lihat Feedback</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
  </div>
</div>
