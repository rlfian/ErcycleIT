<?php
	session_start();
	include '../../koneksi/koneksi.php';

	// Ambil data dari form
	$tanggalmasuk_suratmasuk = mysqli_real_escape_string($db, $_POST['tanggalmasuk_suratmasuk']);
	$kode_suratmasuk         = mysqli_real_escape_string($db, $_POST['kode_suratmasuk']);
    $nomorurut_suratmasuk    = mysqli_real_escape_string($db, $_POST['nomorurut_suratmasuk']);
	$nomor_suratmasuk        = mysqli_real_escape_string($db, $_POST['nomor_suratmasuk']);
	$tanggalsurat_suratmasuk = mysqli_real_escape_string($db, $_POST['tanggalsurat_suratmasuk']);
    $pengirim                = mysqli_real_escape_string($db, $_POST['pengirim']);
	$kepada_suratmasuk       = mysqli_real_escape_string($db, $_POST['kepada_suratmasuk']);
	$perihal_suratmasuk      = mysqli_real_escape_string($db, $_POST['perihal_suratmasuk']);
    $operator                = mysqli_real_escape_string($db, $_POST['operator']);
	$lokasi_dropoff          = mysqli_real_escape_string($db, $_POST['lokasi_dropoff']);
	$tanggal_dropoff         = mysqli_real_escape_string($db, $_POST['tanggal_dropoff']);

	// File
	$nama_file_lengkap = $_FILES['file_suratmasuk']['name'];
	$ext_file          = strtolower(pathinfo($nama_file_lengkap, PATHINFO_EXTENSION));
	$tipe_file         = $_FILES['file_suratmasuk']['type'];
	$tmp_file          = $_FILES['file_suratmasuk']['tmp_name'];

	// Format tanggal
	date_default_timezone_set('Asia/Jakarta'); 
	$tanggal_entry = date("Y-m-d H:i:s");
	$thnNow        = date("Y");

	$tgl_masuk     = date('Y-m-d H:i:s', strtotime($tanggalmasuk_suratmasuk));
	$tgl_surat     = date('Y-m-d', strtotime($tanggalsurat_suratmasuk));
	$tgl_dropoff   = date('Y-m-d H:i:s', strtotime($tanggal_dropoff));

	// Validasi wajib isi & format file PNG
	if (!empty($tgl_masuk) && !empty($kode_suratmasuk) && !empty($nomorurut_suratmasuk) && 
		!empty($nomor_suratmasuk) && !empty($tgl_surat) && !empty($pengirim) && 
		!empty($kepada_suratmasuk) && !empty($perihal_suratmasuk) && !empty($operator) && 
		!empty($tanggal_entry) && !empty($lokasi_dropoff) && !empty($tgl_dropoff) &&
		($ext_file == 'png')) {

		$nama_baru = $thnNow . '-' . $nomorurut_suratmasuk . '.' . $ext_file;
		$path      = "../surat_masuk/" . $nama_baru;

		move_uploaded_file($tmp_file, $path);

		// Simpan ke database
		$sql = "INSERT INTO tb_suratmasuk (
					tanggalmasuk_suratmasuk,
					kode_suratmasuk,
					nomorurut_suratmasuk,
					nomor_suratmasuk,
					tanggalsurat_suratmasuk,
					pengirim,
					kepada_suratmasuk,
					perihal_suratmasuk,
					file_suratmasuk,
					operator,
					tanggal_entry,
					lokasi_dropoff,
					tanggal_dropoff
				) VALUES (
					'$tgl_masuk',
					'$kode_suratmasuk',
					'$nomorurut_suratmasuk',
					'$nomor_suratmasuk',
					'$tgl_surat',
					'$pengirim',
					'$kepada_suratmasuk',
					'$perihal_suratmasuk',
					'$nama_baru',
					'$operator',
					'$tanggal_entry',
					'$lokasi_dropoff',
					'$tgl_dropoff'
				)";
		
		$execute = mysqli_query($db, $sql);

		echo "<center><h2><br>Terima Kasih<br>Surat masuk telah dimasukkan</h2></center>
		      <meta http-equiv='refresh' content='2;url=../datasuratmasuk.php'>";
	} else {
		echo "<center><h2>Pastikan semua kolom terisi dan file berformat .png<br>Silakan ulangi</h2></center>
		      <meta http-equiv='refresh' content='2;url=../inputsuratmasuk.php'>";
	}
?>
