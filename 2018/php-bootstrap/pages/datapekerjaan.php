<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("Location:ceklogin.php");
    }
?>
<?php include ("../pages/header.php"); ?>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
              $('#dataDevice').dataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
              });
    });
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pekerjaan
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pekerjaan</li>
      </ol>
    </section>

        <div class="content">
      <div class="row">
          <div class="col-lg-12">
          <a class="btn btn-social btn-info" style=""data-toggle="collapse" data-target="#collTambah">
                <i class="fa fa-user-plus"></i> TAMBAH DATA
              </a>
              <h2></h2>
          <!--///////////// Begin of CollapseTambah /////////////-->
      <div class="box box-info collapse" id="collTambah" style="margin-top: 20px;">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pekerjaan</h3>
            </div>
            <!-- /.box-header -->

        <div class="box-body">
          <form method="post" action="simpanpekerjaan.php">
            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>ID_Pekerjaan&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_pekerjaan" class="form-control" required="" disabled>
                  </div>
              </td></tr>

              <tr><td>
                <label>ID_Siswa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_siswa" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Kota&emsp;&emsp;&emsp;&ensp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="kota" class="form-control" required="">
                  </div>
              </td></tr>
              </table>
            </div>


            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>Lokasi&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-share" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="lokasi" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Nama Tempat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="nama_tempat_kerja" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Lama Bekerja&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="lama_bekerja" class="form-control" required="">
                  </div>
              </td></tr>

			        <td colspan="3">
              <button type="submit" name="simpanpekerjaan" class="btn btn-info pull-right">Proses</button>
			        </td>
              </table>
            </div>
          </form>
        </div>
      </div>

      <!--///////////// End of CollapseTambah /////////////-->

      <!-- building table to put the data -->
          <div class="panel panel-default">
              <div class="panel-heading">
                Informasi Pekerjaan
              </div>

              <div class="panel-body">
              <div class="table-responsive">
              <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
              <tr>
                <th width="13%"><center><i class="fa fa-address-card-o" aria-hidden="true"></i>&ensp;ID Pekerjaan</center></th>
                <th width="13%"><center><i class="fa fa-edit" aria-hidden="true"></i>&ensp;ID Siswa</center></th>
                <th width="13%"><center><i class="fa fa-building-o" aria-hidden="true"></i>&ensp;Kota</center></th>
                <th width="18%"><center><i class="fa fa-share" aria-hidden="true"></i>&ensp;Lokasi</center></th>
                <th width="13%"><center><i class="fa fa-home" aria-hidden="true"></i>&ensp;Nama Tempat</center></th>
                <th width="13%"><center><i class="fa fa-clock-o" aria-hidden="true"></i>&ensp;Lama Bekerja</center></th>
                <th width="11%"><center><i class="fa fa-cog" aria-hidden="true"></i>&ensp;Options</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM pekerjaan");
      				  while ($baris = mysqli_fetch_row($hasil))
                  {
                $id_pekerjaan = $baris[0];
      				  $id_siswa = $baris[1];
      				  $kota = $baris[2];
      				  $lokasi = $baris[3];
                $nama_tempat_kerja = $baris[4];
                $lama_bekerja = $baris[5];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
      						<td><?php print("$id_pekerjaan"); ?></td>
      						<td><?php print("$id_siswa"); ?></td>
                  <td><?php print("$kota"); ?></td>
      						<td><?php print("$lokasi"); ?></td>
      						<td><?php print("$nama_tempat_kerja"); ?></td>
                  <td><?php print("$lama_bekerja"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-warning btn-sm"
                    href='editpekerjaan.php?&id_pekerjaan=<?php print("$id_pekerjaan"); ?>'><i class="fa fa-edit"></i></a>
      							<a type="button" onclick="return confirm('Anda ingin menghapus Data Pekerjaan?');" class="btn btn-danger btn-sm"
                    href='pekerjaanhapus.php?&id_pekerjaan=<?php print("$id_pekerjaan"); ?>'><i class="fa fa-trash-o"></i></a>
      						</td>
      					</tr>
      				<?php
      					}
                exit();
      				?>
              </tbody>
            </table>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
</div>
  <!-- /.content-wrapper -->
  <?php include ("../pages/footer.php"); ?>