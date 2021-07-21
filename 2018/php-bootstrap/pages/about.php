<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
<!DOCTYPE html>
  <!-- Content Wrapper. Contains page content -->
  <?php include ("../pages/header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        About Information
        <small>About dan Information Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"> Data Admin/User</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="callout callout-info">
        <center><h4>Sistem Informasi Alumni</h4></center>
        <center><p>Sistem Informasi Alumni adalah sistem informasi berbasis web yang digunakan untuk memberikan informasi yang terkait dengan alumni Sekolah Menengah Atas yang dikelola oleh Mahasiswa atau Alumni dari Sekolah Menengah Atas itu sendiri. Pengguna SIA adalah para mahasiswa dan alumni Sekolah Menengah Atas Negeri 1 Karangrayung.</p></center>
      </div>
      <div class="callout callout-info">
        <center><h4>Information Admin</h4></center>
      </div>
    </section>

  <section class="content">
    <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../dist/img/aaaa.jpg" alt="User profile picture">
            <h1 class="profile-username text-center">Praw<b>ito</b></h1>
              <p class="text-muted text-center">Universitas Diponegoro</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIM</b> <a class="pull-right">21120116120019</a>
                </li>
                <li class="list-group-item">
                  <b>Departemen</b> <a class="pull-right">Teknik Komputer</a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Tgl Lahir</b> <a class="pull-right">Grobogan, 17 Juli 1998</a>
                </li>
                <li class="list-group-item">
                  <b>Angkatan</b> <a class="pull-right">2016</a>
                </li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../dist/img/fahmi.jpg" alt="User profile picture">
            <h1 class="profile-username text-center">Fahmi<b> Mochtar</b></h1>
              <p class="text-muted text-center">Universitas Diponegoro</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIM</b> <a class="pull-right">21120116140062</a>
                </li>
                <li class="list-group-item">
                  <b>Departemen</b> <a class="pull-right">Teknik Komputer</a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Tgl Lahir</b> <a class="pull-right">Semarang, 27 Mei 1998</a>
                </li>
                <li class="list-group-item">
                  <b>Angkatan</b> <a class="pull-right">2016</a>
                </li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../dist/img/tendi1.jpg" alt="User profile picture">
            <h1 class="profile-username text-center">Tendi<b>  Nugeraha</b></h1>
              <p class="text-muted text-center">Universitas Diponegoro</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIM</b> <a class="pull-right">21120116120039</a>
                </li>
                <li class="list-group-item">
                  <b>Departemen</b> <a class="pull-right">Teknik Komputer</a>
                </li>
                <li class="list-group-item">
                  <b>Tempat Tgl Lahir</b> <a class="pull-right">Semarang, 17 Mei 1998</a>
                </li>
                <li class="list-group-item">
                  <b>Angkatan</b> <a class="pull-right">2016</a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <div class="content-wrapper">
  </div>
<?php include ("../pages/footer.php"); ?>