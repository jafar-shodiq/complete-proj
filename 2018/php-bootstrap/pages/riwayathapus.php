<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_studi = $_GET['id_studi'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM riwayat_studi WHERE id_studi='$id_studi'") or die(mysqli_error());

	if ($query) {
		header('location:riwayatstudi.php?message=delete');
	}
?>