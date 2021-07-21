<?php
	include "koneksi.php";
	$id_pekerjaan = $_GET['id_pekerjaan'];
	$id_siswa = $_POST['id_siswa'];
	$kota = $_POST['kota'];
	$lokasi = $_POST['lokasi'];
    $nama_tempat_kerja = $_POST['nama_tempat_kerja'];
    $lama_bekerja = $_POST['lama_bekerja'];

    $query = "UPDATE pekerjaan SET
                kota='$kota',
                lokasi='$lokasi',
                nama_tempat_kerja='$nama_tempat_kerja',
                lama_bekerja='$lama_bekerja'
            WHERE id_pekerjaan='$id_pekerjaan'";

    // var_dump($query); die();
    $query = mysqli_query($koneksi, $query);


    ///echo $id_siswa . $nama . $alamat_siswa . $ttl . $no_hp . $email . $media_sosial . $jenis_kelamin ;
	if ($query) {
		header('location:datapekerjaan.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>