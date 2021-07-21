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
        <small>Data Pekerjaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pekerjaan</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
            <?php
            $id_pekerjaan = $_GET['id_pekerjaan'];
            date_default_timezone_set("Asia/Jakarta");
            $hasil = mysqli_query ($koneksi, "SELECT * FROM pekerjaan WHERE id_pekerjaan='$id_pekerjaan'");
            while ($baris = mysqli_fetch_row($hasil))
            {
              $id_pekerjaan = $baris[0];
              $id_siswa = $baris[1];
              $kota = $baris[2];
              $lokasi = $baris[3];
              $nama_tempat_kerja = $baris[4];
              $lama_bekerja = $baris[5];
            ?>
            <form class="form-horizontal" action="editsavepekerjaan.php?id_pekerjaan=<?php print("$id_pekerjaan");?>" method="post" role="form">

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Pekerjaan</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_pekerjaan" type="number" value="<?php print("$id_pekerjaan");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Siswa</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_siswa" type="text" value="<?php print("$id_siswa");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Kota</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="kota" type="text" value="<?php print("$kota");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Lokasi</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="lokasi" type="text" value="<?php print("$lokasi");?>">
        				</div>
        			</div>

              <div class="form-group">
        				<label class="col-sm-2 control-label">Nama Tempat Kerja</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="nama_tempat_kerja" type="text" value="<?php print("$nama_tempat_kerja");?>">
        				</div>
                    </div>
                    <div class="form-group">
        				<label class="col-sm-2 control-label">Lama Bekerja</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="lama_bekerja" type="text" value="<?php print("$lama_bekerja");?>">
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