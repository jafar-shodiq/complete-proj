<?php
	include "koneksi.php";
	$id_studi = $_GET['id_studi'];
	$id_siswa = $_POST['id_siswa'];
	$tahun_lulus = $_POST['tahun_lulus'];
	$jurusan_sma = $_POST['jurusan_sma'];
    $kelas = $_POST['kelas'];

    $query = "UPDATE riwayat_studi SET
                tahun_lulus='$tahun_lulus',
                jurusan_sma='$jurusan_sma',
                kelas='$kelas'
            WHERE id_studi='$id_studi'";

    // var_dump($query); die();
    $query = mysqli_query($koneksi, $query);


    ///echo $id_siswa . $nama . $alamat_siswa . $ttl . $no_hp . $email . $media_sosial . $jenis_kelamin ;
	if ($query) {
		header('location:riwayatstudi.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>