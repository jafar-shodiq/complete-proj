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
        <small>Riwayat Studi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Riwayat Studi</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
            <?php
            $id_studi = $_GET['id_studi'];
            date_default_timezone_set("Asia/Jakarta");
            $hasil = mysqli_query ($koneksi, "SELECT * FROM riwayat_studi WHERE id_studi='$id_studi'");
            while ($baris = mysqli_fetch_row($hasil))
            {
              $id_studi = $baris[0];
              $id_siswa = $baris[1];
              $tahun_lulus = $baris[2];
              $jurusan_sma = $baris[3];
              $kelas = $baris[4];
            ?>
            <form class="form-horizontal" action="editsaveriwayat.php?id_studi=<?php print("$id_studi");?>" method="post" role="form">

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Studi</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_studi" type="number" value="<?php print("$id_studi");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Siswa</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_siswa" type="text" value="<?php print("$id_siswa");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Tahun Lulus</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="tahun_lulus" type="text" value="<?php print("$tahun_lulus");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Jurusan SMA</label>
        				<div class="col-sm-4">
                  <select name="jurusan_sma" class="form-control">
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                  </select>
        					<!-- <input class="form-control" name="jurusan_sma" type="text" value="<?php print("$jurusan_sma");?>"> -->
        				</div>
        			</div>

                    <div class="form-group">
        				<label class="col-sm-2 control-label">Kelas</label>
        				<div class="col-sm-4">
                <select name="kelas" class="form-control">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
        					<!-- <input class="form-control" name="kelas" type="text" value="<?php print("$kelas");?>"> -->
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