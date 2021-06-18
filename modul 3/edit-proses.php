<?php

if(isset($_POST['simpan'])){
	
	include('koneksi.php');

	$id			= $_POST['id'];	
	$nama		= $_POST['nama'];
	$bagian		= $_POST['bagian'];	
	$gajih	    = $_POST['gajih'];	
	
	$update = mysql_query("UPDATE pegawai SET pegawai_nama='$nama', pegawai_bagian='$bagian', pegawai_gajih='$gajih' WHERE pegawai_id='$id'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';	
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>