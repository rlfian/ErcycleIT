<?php
include '../../koneksi/koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_admin'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $gambar_lama = $_POST['gambar_lama'];

  // Jika password tidak kosong, update
  if (!empty($_POST['password'])) {
    $password = md5($_POST['password']);
    $updatePassword = ", password='$password'";
  } else {
    $updatePassword = "";
  }

  // Gambar baru
  if ($_FILES['gambar']['name']) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../images/".$gambar);
  } else {
    $gambar = $gambar_lama;
  }

  $sql = "UPDATE tb_admin SET nama='$nama', username='$username', email='$email', gambar='$gambar' $updatePassword WHERE id_admin='$id'";
  mysqli_query($db, $sql);

  header("Location: ../admin.php");
}
?>
