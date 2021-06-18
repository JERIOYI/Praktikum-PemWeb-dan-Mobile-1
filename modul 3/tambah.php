<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PEMROGRAMAN WEB & MOBILE I</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>DATA PEGAWAI</h1>
	
	<h2><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></h2>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						<option value="SUB1">SUB1</option>
						<option value="SUB2">SUB2</option>
						<option value="SUB3">SUB3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gajih</td>
				<td>:</td>
				<td>
					<select name="gajih" required>
						<option value="">Pilih Gajih</option>
						<option value="1000000">1000000</option>
						<option value="2000000">2000000</option>
						<option value="3000000">3000000</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>