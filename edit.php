<!DOCTYPE html>
<html>

<head>
	<title>Data Mobil</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>

<body>
	<div class="judul">
		<h1>DATA KENDARAAN MOBIL</h1>
	</div>

	<br />
	<center>
		<a href="index.php">Lihat Semua Data</a>

		<br />
		<h2>Edit data</h2>

		<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$data = mysqli_query($koneksi, "select * from user where id='$id'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form action="update.php" method="post" id=<?php echo $id; ?> enctype="multipart/form-data">
				<table>
					<tr>
						<td>Merk mobil</td>
						<td><input type="text" name="merk_mobil" value="<?php echo $d['merk_mobil'] ?>"></td>
					</tr>
					<tr>
						<td>Nama Mobil</td>
						<td><input type="text" name="nama_mobil" value="<?php echo $d['nama_mobil'] ?>"></td>
					</tr>
					<tr>
						<td>Tipe</td>
						<td><input type="text" name="tipe_mobil" value="<?php echo $d['tipe_mobil'] ?>"></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="tahun" value="<?php echo $d['tahun'] ?>">
						</td>
					</tr>
					<tr>
						<td>Foto</td>
						<td><input type="file" name="foto" value="<?php echo $d['foto'] ?>"><img src="image/<?php echo $d['foto'] ?>" width="130" height="100"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Simpan"></td>
					</tr>
				</table>
			</form>
		<?php } ?>

		<script src="main.js"></script>
</body>

</html>