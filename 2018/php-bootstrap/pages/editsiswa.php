<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
<?php include ("../pages/header.php"); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit
        <small>Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
            <?php
            $id_siswa = $_GET['id_siswa'];
            date_default_timezone_set("Asia/Jakarta");
            $hasil = mysqli_query ($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
            while ($baris = mysqli_fetch_row($hasil))
            {
              $id_siswa = $baris[0];
              $nama = $baris[1];
              $alamat_siswa = $baris[2];
              $ttl = $baris[3];
              $no_hp = $baris[4];
              $email = $baris[5];
              $media_sosial = $baris[6];
              $jenis_kelamin = $baris[7];
            ?>
            <form class="form-horizontal" action="editsavesiswa.php?id_siswa=<?php print("$id_siswa");?>" method="post" role="form">

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Siswa</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_siswa" type="number" value="<?php print("$id_siswa");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Nama</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="nama" type="text" value="<?php print("$nama");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Alamat</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="alamat_siswa" type="text" value="<?php print("$alamat_siswa");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Tempat Tgl Lahir</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="ttl" type="text" value="<?php print("$ttl");?>">
        				</div>
        			</div>

              <div class="form-group">
        				<label class="col-sm-2 control-label">No. Hp</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="no.hp" type="text" value="<?php print("$no_hp");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Email</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="email" type="text" value="<?php print("$email");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Media Sosial</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="media_sosial" type="text" value="<?php print("$media_sosial");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Jenis Kelamin</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="jenis_kelamin" type="text" value="<?php print("$jenis_kelamin");?>"disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<div class="col-sm-offset-2 col-sm-4">
                  <button type="submit" class="btn btn-success" value="Simpan Perubahan">Simpan Perubahan</button>
        				</div>
        			</div>

            <?php }
            exit(); ?>

        		</form>
          </div>
        </div>
      </div>
    </div>
<?php include ("../pages/footer.php"); ?>