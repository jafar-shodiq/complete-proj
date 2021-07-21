<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_pekerjaan = $_GET['id_pekerjaan'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM pekerjaan WHERE id_pekerjaan='$id_pekerjaan'") or die(mysqli_error());

	if ($query) {
		header('location:datapekerjaan.php?message=delete');
	}
?>