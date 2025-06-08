<!DOCTYPE html>
<html>

<head>
	<title>Data Mobil</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

	<div class="judul">
		<h1>DATA KENDARAAN MOBIL</h1>
	</div>
	<center>
		<?php
		if (isset($_GET['pesan'])) {
			$pesan = $_GET['pesan'];
			if ($pesan == "input") {
				echo "Data berhasil di input.";
			} else if ($pesan == "update") {
				echo "Data berhasil di update.";
			} else if ($pesan == "hapus") {
				echo "Data berhasil di hapus.";
			}
		}
		?>
		<br>
		<br>
		<center>
			<a class="tombol" href="input.php">+ Tambah Data Baru</a>
			<h2>Data user</h2>
			<table border=1 class="table">
				<tr>
					<th>No</th>
					<th>Merk Mobil</th>
					<th>Nama Mobil</th>
					<th>Tipe Mobil</th>
					<th>Tahun</th>
					<th>Foto</th>
					<th>Opsi</th>
				</tr>
				<?php
				include "koneksi.php";
				$no = 1;
				$data = mysqli_query($koneksi, "select * from user");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['merk_mobil']; ?></td>
						<td><?php echo $d['nama_mobil']; ?></td>
						<td><?php echo $d['tipe_mobil']; ?></td>
						<td><?php echo $d['tahun']; ?></td>
						<td><img src="image/<?php echo $d['foto'] ?>" width="130" height="100"></td>
						<td>
							<a class="edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
							<a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</table>


			<script src="main.js"></script>
</body>

</html>