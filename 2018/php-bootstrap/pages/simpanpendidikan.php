<?php
    include "koneksi.php";
    $id_pendidikan = $_POST['id_pendidikan'];
    $id_siswa = $_POST['id_siswa'];
    $nama_institusi = $_POST['nama_institusi'];
    $alamat_institusi = $_POST['alamat_institusi'];
    $jenis_institusi = $_POST['jenis_institusi'];
    $jurusan = $_POST['jurusan'];
    $alamat_kost = $_POST['alamat_kost'];

    $query = mysqli_query($koneksi, "INSERT INTO pendidikan_lanjut VALUES ('$id_pendidikan', '$id_siswa', '$nama_institusi', '$alamat_institusi','$jenis_institusi','$jurusan','$alamat_kost')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:datapendidikan.php?message=success');
	}
    exit();
?>