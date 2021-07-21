<?php
	include "koneksi.php";
    $id_admin = $_GET['id_admin'];
    $namauser = $_POST['namauser'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $query = "UPDATE admin SET
                namauser='$namauser',
                username='$username',
                password='$password'
            WHERE id_admin='$id_admin'";

    // var_dump($query); die();
    $query = mysqli_query($koneksi, $query);


    ///echo $id_siswa . $nama . $alamat_siswa . $ttl . $no_hp . $email . $media_sosial . $jenis_kelamin ;
	if ($query) {
		header('location:dataadmin.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>