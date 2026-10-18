<?php
include '../../koneksi/koneksi.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($tmp, "../images/".$gambar);

  $sql = "INSERT INTO tb_admin (nama, username, email, password, gambar)
          VALUES ('$nama', '$username', '$email', '$password', '$gambar')";
  mysqli_query($db, $sql);

  header("Location: ../admin.php");
}
?>
