<?php
	include "koneksi.php";
	$id_siswa = $_GET['id_siswa'];
	$nama = $_POST['nama'];
	$alamat_siswa = $_POST['alamat_siswa'];
	$ttl = $_POST['ttl'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $media_sosial = $_POST['media_sosial'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "UPDATE siswa SET
                nama='$nama',
                alamat_siswa='$alamat_siswa',
                ttl='$ttl',
                no_hp='$no_hp',
                email='$email',
                media_sosial='$media_sosial'
            WHERE id_siswa='$id_siswa'";

    // var_dump($query); die();
    $query = mysqli_query($koneksi, $query);


    ///echo $id_siswa . $nama . $alamat_siswa . $ttl . $no_hp . $email . $media_sosial . $jenis_kelamin ;
	if ($query) {
		header('location:datasiswa.php?message=success');
	}
	else {
		echo "Gagal";
	}
?>