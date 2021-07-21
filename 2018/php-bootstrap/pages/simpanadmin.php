<?php
//   include "koneksi.php";
//   $id_admin = $_POST['id_admin'];
//   $username = $_POST['username'];
//   $password = $_POST['password'];

//   $query = mysqli_query($koneksi, "INSERT INTO admin VALUES ($id_admin, '$username', '$password')") or die(mysqli_error($koneksi));
// 	if ($query) {
// 		header('location:dataadmin.php?message=success');
// 	}
//   exit();
?>


<?php
    $id_admin = $_POST['id_admin'];
    $namauser = $_POST['namauser'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    require_once "koneksi.php";
    $sql = "INSERT INTO admin (id_admin, namauser, username, password) VALUES ('$id_admin','$namauser','$username', '$password')";
    $query = mysqli_query($koneksi, $sql);
	if ($query) {
		header('location:dataadmin.php?message=success');
	}
    exit();
?>