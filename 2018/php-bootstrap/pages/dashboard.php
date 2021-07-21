<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username'])){
      header("location:ceklogin.php");
    }
?>
<!DOCTYPE html>
  <!-- Content Wrapper. Contains page content -->
  <meta http-equiv="refresh" content="60">
  <?php include ("../pages/header.php"); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Sistem Informasi Alumni SMA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Status</h3>
          </div>
          <div class="box-body">
              <div class="small-box bg-olive">
                    <div class="inner">
                      <h3>
                      <?php
                      include_once("koneksi.php");
                      // Print out result
                      foreach($koneksi->query('SELECT COUNT(*) FROM siswa') as $row) {
                        echo $row['COUNT(*)'];
                      }
                      ?></h3>
                      <p>Data Siswa</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-file-code-o"></i>
                    </div>
                    <a href="../pages/datasiswa.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <div class="small-box bg-maroon">
                    <div class="inner">
                      <h3>
                        <?php
                        include_once("koneksi.php");
                        // Print out result
                        foreach($koneksi->query('SELECT COUNT(*) FROM pendidikan_lanjut') as $row) {
                          echo $row['COUNT(*)'];
                        }
                        ?></h3>
                      </h3>
                      <p>Data Pendidikan</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <a href="../pages/datapendidikan.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
          </div>
        </div>
    </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Status</h3>
          </div>
          <div class="box-body">
            <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>
                      <?php
                      include_once("koneksi.php");
                      // Print out result
                      foreach($koneksi->query('SELECT COUNT(*) FROM riwayat_studi') as $row) {
                        echo $row['COUNT(*)'];
                      }
                      ?></h3>
                      <p>Riwayat Studi</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="../pages/riwayatstudi.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>
                        <?php
                        include_once("koneksi.php");
                        // Print out result
                        foreach($koneksi->query('SELECT COUNT(*) FROM pekerjaan') as $row) {
                          echo $row['COUNT(*)'];
                        }
                        ?></h3>
                      </h3>
                      <p>Data Pekerjaan</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <a href="../pages/datapekerjaan.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
          </div>
        </div>
    </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Status</h3>
          </div>
          <div class="box-body">
              <div class="small-box bg-olive">
                    <div class="inner">
                      <h3>
                      <?php
                      include_once("koneksi.php");
                      // Print out result
                      foreach($koneksi->query('SELECT COUNT(*) FROM siswa') as $row) {
                        echo $row['COUNT(*)'];
                      }
                      ?></h3>
                      <p>Siswa Bekerja</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-file-code-o"></i>
                    </div>
                    <a href="../pages/siswabekerja.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <div class="small-box bg-maroon">
                    <div class="inner">
                      <h3>
                        <?php
                        include_once("koneksi.php");
                        // Print out result
                        foreach($koneksi->query('SELECT COUNT(*) FROM pekerjaan') as $row) {
                          echo $row['COUNT(*)'];
                        }
                        ?></h3>
                      </h3>
                      <p>Mahasiswa</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <a href="../pages/mahasiswa.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php include ("../pages/footer.php"); ?>