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
        <small>Data Pendidikan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pendidikan</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
            <?php
            $id_pendidikan = $_GET['id_pendidikan'];
            date_default_timezone_set("Asia/Jakarta");
            $hasil = mysqli_query ($koneksi, "SELECT * FROM pendidikan_lanjut WHERE id_pendidikan='$id_pendidikan'");
            while ($baris = mysqli_fetch_row($hasil))
            {
              $id_pendidikan = $baris[0];
              $id_siswa = $baris[1];
              $nama_institusi = $baris[2];
              $alamat_institusi = $baris[3];
              $jenis_institusi = $baris[4];
              $jurusan = $baris[5];
              $alamat_kost = $baris[6];
            ?>
            <form class="form-horizontal" action="editsavependidikan.php?id_pendidikan=<?php print("$id_pendidikan");?>" method="post" role="form">

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Pendidikan</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_pendidikan" type="number" value="<?php print("$id_pendidikan");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Siswa</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_siswa" type="text" value="<?php print("$id_siswa");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Nama Institusi</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="nama_institusi" type="text" value="<?php print("$nama_institusi");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Alamat Institusi</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="alamat_institusi" type="text" value="<?php print("$alamat_institusi");?>">
        				</div>
        			</div>

                    <div class="form-group">
        				<label class="col-sm-2 control-label">Jenis Institusi</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="jenis_institusi" type="text" value="<?php print("$jenis_institusi");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Jurusan</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="jurusan" type="text" value="<?php print("$jurusan");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Alamat Kost</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="alamat_kost" type="text" value="<?php print("$alamat_kost");?>">
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