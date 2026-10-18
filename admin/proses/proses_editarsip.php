<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id_arsip            = mysqli_real_escape_string($db,$_POST['id_arsip']);
	$nama_arsip		= mysqli_real_escape_string($db,$_POST['nama_arsip']);
	$kode_arsip	        = mysqli_real_escape_string($db,($_POST['kode_arsip']));
	
	$sql  		= "SELECT * FROM tb_arsip where id_arsip='".$id_arsip."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
			$sql = "UPDATE tb_arsip set 
						id_arsip		= '$id_arsip',
						nama_arsip		= '$nama_arsip',
						kode_arsip 		= '$kode_arsip ',
				where id_arsip = $id_arsip";
				echo "<Center><h2><br>Data Arsip Telah Berubah</h2></center>
				<meta http-equiv='refresh' content='2;url=../detail-arsip.php?id_arsip=".$id_arsip."'>";
			
		?>
	