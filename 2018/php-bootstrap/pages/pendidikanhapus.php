<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_pendidikan = $_GET['id_pendidikan'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM pendidikan_lanjut WHERE id_pendidikan='$id_pendidikan'") or die(mysqli_error());

	if ($query) {
		header('location:datapendidikan.php?message=delete');
	}
?>