<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id_arsip           = mysqli_real_escape_string($db,$_POST['id_arsip']);
	$nama_arsip			= mysqli_real_escape_string($db,$_POST['nama_arsip']);
	$kode_arsip	        = mysqli_real_escape_string($db,($_POST['kode_arsip']));
	
	if (!($id_arsip=='') and !($nama_arsip=='') and !($kode_arsip =='')){		
		
		$id_baru = $nama_arsip;
		
		$sql = "INSERT INTO tb_arsip (id_arsip, nama_arsip, kode_arsip)
				values ('$id_arsip', '$nama_arsip', '$kode_arsip')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Arsip Telah Didaftarkan ke Sistem</h2></center>
			<meta http-equiv='refresh' content='2;url=../dataarsip.php'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom<br>TERIMA KASIH</h2></center>
			<meta http-equiv='refresh' content='2;url=../inputarsip.php'>";
	}
	
?>
	