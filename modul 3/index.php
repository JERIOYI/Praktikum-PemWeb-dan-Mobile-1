<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PEMROGRAMAN WEB & MOBILE I</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>DATA PEGAWAI</h1>
	
	<h2><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></h2>
	
	
	<table class="styled-table">
		<tr bgcolor="#f0ffff">
			<th>No.</th>
			<th>Nama Lengkap</th>
			<th>Bagian</th>
			<th>Gajih</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('koneksi.php');
		
		
		$query = mysql_query("SELECT * FROM pegawai ORDER BY pegawai_bagian DESC") or die(mysql_error());
		
		
		if(mysql_num_rows($query) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['pegawai_nama'].'</td>';
					echo '<td>'.$data['pegawai_bagian'].'</td>';	
					echo '<td>'.$data['pegawai_gajih'].'</td>';	
					echo '<td><a href="edit.php?id='.$data['pegawai_id'].'">Edit</a> / <a href="hapus.php?id='.$data['pegawai_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>