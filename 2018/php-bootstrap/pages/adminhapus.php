<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_admin = $_GET['id_admin'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id_admin'") or die(mysqli_error());

	if ($query) {
		header('location:dataadmin.php?message=delete');
	}
?>