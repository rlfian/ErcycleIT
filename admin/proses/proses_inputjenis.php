<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$nama_jenis            = mysqli_real_escape_string($db,$_POST['nama_jenis']);
	$jenis_surat			= mysqli_real_escape_string($db,$_POST['jenis_surat']);
	
	if (!($nama_jenis=='') and !($jenis_surat=='')){		
		
		$id_baru = $nama_jenis;
		
		$sql = "INSERT INTO tb_jenis (nama_jenis, jenis_surat)
				values ('$nama_jenis', '$jenis_surat')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Jenis Surat Telah Didaftarkan ke Sistem</h2></center>
			<meta http-equiv='refresh' content='2;url=../datajenis.php'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom<br>TERIMA KASIH</h2></center>
			<meta http-equiv='refresh' content='2;url=../inputjenis.php'>";
	}
	
?>
	