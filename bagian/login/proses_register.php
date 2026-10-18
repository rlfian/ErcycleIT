<?php
include '../../koneksi/koneksi.php';

$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

if ($password != $konfirmasi) {
    echo "<script>alert('Konfirmasi password tidak sesuai'); window.location='register.php';</script>";
    exit;
}

$cek = mysqli_query($db, "SELECT * FROM tb_bagian WHERE username_admin_bagian = '$username_admin_bagian'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Username sudah terdaftar'); window.location='register.php';</script>";
    exit;
}

$hashed = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO tb_bagian  (nama_bagian, username_admin_bagian, password_bagian) VALUES ('$nama_bagian', '$username_admin_bagian', '$password_bagian')";
$simpan = mysqli_query($db, $query);

if ($simpan) {
    echo "<script>alert('Pendaftaran berhasil, silakan login'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal mendaftar'); window.location='register.php';</script>";
}
?>
