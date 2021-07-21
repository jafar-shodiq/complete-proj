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
        <small>Data Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
            <?php
            $id_admin = $_GET['id_admin'];
            date_default_timezone_set("Asia/Jakarta");
            $hasil = mysqli_query ($koneksi, "SELECT * FROM admin WHERE id_admin='$id_admin'");
            while ($baris = mysqli_fetch_row($hasil))
            {
              $id_admin = $baris[0];
              $namauser = $baris[1];
              $username = $baris[2];
              $password = $baris[3];

            ?>
            <form class="form-horizontal" action="editsaveadmin.php?id_admin=<?php print("$id_admin");?>" method="post" role="form">

        			<div class="form-group">
        				<label class="col-sm-2 control-label">ID Admin</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="id_admin" type="number" value="<?php print("$id_admin");?>" disabled>
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Nama Admin</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="namauser" type="text" value="<?php print("$namauser");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Username</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="username" type="text" value="<?php print("$username");?>">
        				</div>
        			</div>

        			<div class="form-group">
        				<label class="col-sm-2 control-label">Password</label>
        				<div class="col-sm-4">
        					<input class="form-control" name="password" type="text" value="<?php print("$password");?>">
        				</div>
        			</div>

                    <!-- <div class="form-group">
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
                    </div> -->

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