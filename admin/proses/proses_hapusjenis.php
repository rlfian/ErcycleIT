<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['nama_jenis'])) {

	$id = $_GET['nama_jenis'];
    	

	$sql2  		= "SELECT * FROM tb_jenis where nama_jenis='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_jenis WHERE nama_jenis='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                echo "<Center><h2><br>Data Jenis telah Dihapus</h2></center>
				<meta http-equiv='refresh' content='2;url=../datajenis.php'>";
            }		else{
			echo "<Center><h2><br>GAGAL MENGHAPUS<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=../datajenis.php'>";
	}	
}	
}						
?>   