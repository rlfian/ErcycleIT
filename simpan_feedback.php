<?php
include 'koneksi/koneksi.php';

$nama   = mysqli_real_escape_string($db, $_POST['nama']);
$email  = mysqli_real_escape_string($db, $_POST['email']);
$pesan  = mysqli_real_escape_string($db, $_POST['pesan']);

$query = "INSERT INTO tb_feedback (nama, email, pesan, tanggal) 
          VALUES ('$nama', '$email', '$pesan', NOW())";

if (mysqli_query($db, $query)) {
  echo "<script>alert('Terima kasih atas feedback Anda!'); window.location.href='index.php#feedback';</script>";
} else {
  echo "Gagal menyimpan data: " . mysqli_error($db);
}
?>
