<!DOCTYPE html>
<?php
	session_start();
	include "ceksessionn.php";
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eRecycleIT - Sistem Daur Ulang Perangkat IT</title>

    <!-- Bootstrap -->
    <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/icon.ico">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="proses_login.php" id="login" name="login" method="post">
              <h1>Login Admin</h1>
              <br><center><p>Repost by <a href='https://kota-bogor.kpu.go.id/' title='KPU Kota Bogor' target='_blank'>Kelompok 1</a></p></center>
              
              <div class="form-group has-feedback">
                <input type="text" id="username" name="username_admin" class="form-control" autocomplete="off" maxlength="50" placeholder="Username" required="username" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" autocomplete="off" maxlength="50" placeholder="Password" required="password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div>
                <a href="../../index.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Masuk</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <h2><i class="fa fa-recycle"></i>eRecycleIT</h2>
                  <p>©2025 eRecycleIT - Sistem Daur Ulang Perangkat IT</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
