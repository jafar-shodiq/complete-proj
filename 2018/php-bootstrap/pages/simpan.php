<?php
  include "koneksi.php";
  $id_pekerjaan = $_POST['id_pekerjaan'];
  $id_siswa = $_POST['id_siswa'];
  $kota = $_POST['kota'];
  $lokasi = $_POST['lokasi'];
  $nama_tempat_kerja = $_POST['nama_tempat_kerja'];
  $lama_bekerja = $_POST['lama_bekerja'];

  $query = mysqli_query($koneksi, "INSERT INTO pekerjaan VALUES ($id_pekerjaan, '$id_siswa', '$kota', '$lokasi','$nama_tempat_kerja','$lama_bekerja')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:datapekerjaan.php?message=success');
	}
  exit();
?>