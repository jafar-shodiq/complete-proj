<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_siswa = $_GET['id_siswa'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id_siswa'") or die(mysqli_error());

	if ($query) {
		header('location:datasiswa.php?message=delete');
	}
?>