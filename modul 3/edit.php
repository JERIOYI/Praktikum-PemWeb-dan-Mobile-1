<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PEMROGRAMAN WEB & MOBILE I</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>DATA PEGAWAI</h1>
	
	<h2><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></h2>
	
	<h3>Edit Data Pegawai</h3>
	
	<?php
	
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	$show = mysql_query("SELECT * FROM pegawai WHERE pegawai_id='$id'");
	
	
	if(mysql_num_rows($show) == 0){
		
		
		echo '<script>window.history.back()</script>';
		
	}else{
	
		
		$data = mysql_fetch_assoc($show);	
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['pegawai_nama']; ?>" required></td> 
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						<option value="SUB1" <?php if($data['pegawai_bagian'] == 'SUB1'){ echo 'selected'; } ?>>SUB1</option>	 
						<option value="SUB2" <?php if($data['pegawai_bagian'] == 'SUB2'){ echo 'selected'; } ?>>SUB2</option>	
						<option value="SUB3" <?php if($data['pegawai_bagian'] == 'SUB3'){ echo 'selected'; } ?>>SUB3</option>	
					</select>
				</td>
			</tr>
			<tr>
				<td>Gajih</td>
				<td>:</td>
				<td>
					<select name="gajih" required>
						<option value="">Pilih Gajih</option>
						<option value="1000000" <?php if($data['pegawai_bagian'] == '1000000'){ echo 'selected'; } ?>>1000000</option>	
						<option value="2000000" <?php if($data['pegawai_bagian'] == '2000000'){ echo 'selected'; } ?>>2000000</option>	
						<option value="3000000" <?php if($data['pegawai_bagian'] == '3000000'){ echo 'selected'; } ?>>3000000</option>	
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>