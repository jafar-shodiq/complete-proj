<?php
	include "koneksi.php";
	$id_pendidikan = $_GET['id_pendidikan'];
	$id_siswa = $_POST['id_siswa'];
	$nama_institusi = $_POST['nama_institusi'];
	$alamat_institusi = $_POST['alamat_institusi'];
    $jenis_institusi = $_POST['jenis_institusi'];
    $jurusan = $_POST['jurusan'];
    $alamat_kost = $_POST['alamat_kost'];

    $query = "UPDATE pendidikan_lanjut SET
                nama_institusi='$nama_institusi',
                alamat_institusi='$alamat_institusi',
                jenis_institusi='$jenis_institusi',
                jurusan='$jurusan',
                alamat_kost='$alamat_kost'
            WHERE id_pendidikan='$id_pendidikan'";

    // var_dump($query); die();
    $query = mysqli_query($koneksi, $query);


    ///echo $id_siswa . $nama . $alamat_siswa . $ttl . $no_hp . $email . $media_sosial . $jenis_kelamin ;
	if ($query) {
		header('location:datapendidikan.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>