<?php

if(isset($_POST['tambah'])){
	
	include('koneksi.php');
	$nama		= $_POST['nama'];	
	$bagian		= $_POST['bagian'];	
	$gajih   	= $_POST['gajih'];	
	

	$input = mysql_query("INSERT INTO pegawai VALUES(NULL, '$nama', '$bagian', '$gajih')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';	
		echo '<a href="tambah.php">Kembali</a>';	
		
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>