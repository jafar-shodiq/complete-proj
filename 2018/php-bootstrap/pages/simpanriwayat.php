<?php
  include "koneksi.php";
  $id_studi = $_POST['id_studi'];
  $id_siswa = $_POST['id_siswa'];
  $tahun_lulus = $_POST['tahun_lulus'];
  $jurusan_sma = $_POST['jurusan_sma'];
  $kelas = $_POST['kelas'];

  $query = mysqli_query($koneksi, "INSERT INTO riwayat_studi VALUES ('$id_studi', '$id_siswa', '$tahun_lulus', '$jurusan_sma','$kelas')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:riwayatstudi.php?message=success');
	}
  exit();
?>