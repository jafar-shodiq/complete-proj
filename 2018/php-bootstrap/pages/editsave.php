<?php
	include "koneksi.php";
	$id_device = $_GET['id_device'];
	// $id_device = $_POST['id_device'];
	$nama_device = $_POST['nama'];
	$lokasi = $_POST['lokasi'];
	$latitude = $_POST['latitude'];
  $langitude = $_POST['langitude'];
  $status = $_POST['status'];

	$query = mysqli_query($koneksi, "UPDATE devicedata SET
		nama_device='$nama_device',
		lokasi='$lokasi',
		latitude='$latitude',
		langitude='$langitude',
		status='$status' WHERE id_device='$id_device'");

  // echo $id . $nama_device . $lokasi . $latitude . $langitude . $status;
	if ($query) {
		header('location:device.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>