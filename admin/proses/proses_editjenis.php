<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $nama_jenis            = mysqli_real_escape_string($db,$_POST['nama_jenis']);
	$jenis_surat		= mysqli_real_escape_string($db,$_POST['jenis_surat']);
	
	$sql  		= "SELECT * FROM tb_jenis where nama_jenis='".$nama_jenis."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
			$sql = "UPDATE tb_jenis set 
						nama_jenis		= '$nama_jenis',
						jenis_surat		= '$jenis_surat',
				where nama_jenis = $nama_jenis";
				echo "<Center><h2><br>Data Jenis Telah Berubah</h2></center>
				<meta http-equiv='refresh' content='2;url=../detail-jenis.php?nama_jenis=".$nama_jenis."'>";
			
		?>
	