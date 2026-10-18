<?php
include '../../koneksi/koneksi.php';

$id = $_GET['id_admin'];
mysqli_query($db, "DELETE FROM tb_admin WHERE id_admin = '$id'");
header("Location: ../admin.php");
?>
