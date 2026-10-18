<?php
include '../../koneksi/koneksi.php'; // Pastikan path ke koneksi benar

if (isset($_POST['simpan'])) {
    $nama_lokasi = mysqli_real_escape_string($db, $_POST['nama_lokasi']);
    $keterangan  = mysqli_real_escape_string($db, $_POST['keterangan']);

    $sql = "INSERT INTO tb_lokasi (nama_lokasi, keterangan) VALUES ('$nama_lokasi', '$keterangan')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script>alert('Data lokasi berhasil disimpan!'); window.location = '../datalokasi.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data lokasi!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Akses langsung tidak diperbolehkan!'); window.location = '../datalokasi.php';</script>";
}
