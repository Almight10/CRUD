<?php

include 'koneksi.php';
$id = $_POST['id'];
$merk_mobil = $_POST['merk_mobil'];
$nama_mobil = $_POST['nama_mobil'];
$tipe_mobil = $_POST['tipe_mobil'];
$tahun = $_POST['tahun'];

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
	header("location:index.php?alert=gagal_ekstensi");
} else {
	if ($ukuran < 1044070) {
		$xx = $rand . '_' . $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'image/' . $rand . '_' . $filename);
	}
}

mysqli_query($koneksi, "update user set  merk_mobil='$merk_mobil', nama_mobil='$nama_mobil', tipe_mobil='$tipe_mobil', tahun='$tahun', foto='$xx' 
WHERE id='$id'");

header("location:index.php?pesan=update");
