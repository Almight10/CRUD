<!DOCTYPE html>
<html>

<head>
	<title>Data Mobil</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>

<body>
	<div class="judul">
		<h1>Input Data KENDARAAN MOBIL</h1>
	</div>

	<br />
	<center>
		<a href="index.php">Lihat Semua Data</a>

		<br />

		<h2>Input data baru</h2>
		<form action="input-aksi.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Merk Mobil</td>
					<td><input type="text" name="merk_mobil"></td>
				</tr>
				<tr>
					<td>Nama Mobil</td>
					<td><input type="text" name="nama_mobil"></td>
				</tr>
				<tr>
					<td>Tipe Mobil</td>
					<td><input type="text" name="tipe_mobil"></td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td><input type="text" name="tahun"></td>
				</tr>
				<tr>
					<td>Foto</td>
					<td><input type="file" name="foto"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>

		<script src="main.js"></script>
</body>

</html>