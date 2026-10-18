<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Pengguna Baru</title>
  <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="proses_register.php" method="post">
          <h1>Daftar Akun</h1>

          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <input type="password" name="konfirmasi" class="form-control" placeholder="Konfirmasi Password" required>
          </div>
          <button type="submit" class="btn btn-success btn-block">Daftar</button>
            <a href="../login/index.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button></a>
          <br>
          <a href="index.php" class="btn btn-link">Sudah punya akun? Login</a>
          <div class="clearfix"></div>
        </form>
      </section>
    </div>
  </div>
</body>
</html>
