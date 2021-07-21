<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
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
        Pendidikan
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pendidikan</li>
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
          <h3 class="box-title">Tambah Data Pendidikan</h3>
          </div>
            <!-- /.box-header -->

        <div class="box-body">
          <form method="post" action="simpanpendidikan.php">
            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>ID_Pendidikan&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_pendidikan" class="form-control" required="" disabled>
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
                <label>Nama Institusi&emsp;&emsp;&emsp;&ensp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="nama_institusi" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Alamat Institusi&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="alamat_institusi" class="form-control" required="">
                  </div>
              </td></tr>

              </table>
            </div>


            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>Jenis Institusi&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-gavel" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="jenis_institusi" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Jurusan&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="jurusan" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Alamat Kos&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="alamat_kost" class="form-control" required="">
                  </div>
              </td></tr>

			        <td colspan="3">
              <button type="submit" name="simpanpendidikan" class="btn btn-info pull-right">Proses</button>
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
                Informasi Data Pendidikan
              </div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
              <tr>
                <th width="12%"><center><i class="fa fa-id-card-o" aria-hidden="true"></i>&ensp;ID Pend.</center></th>
                <th width="13%"><center><i class="fa fa-edit" aria-hidden="true"></i>&ensp;ID Siswa</center></th>
                <th width="14%"><center><i class="fa fa-university" aria-hidden="true"></i>&ensp;Nama Inst.</center></th>
                <th width="13%"><center><i class="fa fa-location-arrow" aria-hidden="true"></i>&ensp;Alamat Inst.</center></th>
                <th width="13%"><center><i class="fa fa-gavel" aria-hidden="true"></i>&ensp;Jenis Inst.</center></th>
                <th width="11%"><center><i class="fa fa-graduation-cap" aria-hidden="true"></i>&ensp;Jurusan</center></th>
                <th width="13%"><center><i class="fa fa-street-view" aria-hidden="true"></i>&ensp;Alamat Kost</center></th>
                <th width="14%"><center><i class="fa fa-cog" aria-hidden="true"></i>&ensp;Options</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM pendidikan_lanjut");
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
      					<tr align="center">
      						<!-- put data which we want to show via table -->
      						<td><?php print("$id_pendidikan"); ?></td>
      						<td><?php print("$id_siswa"); ?></td>
                  <td><?php print("$nama_institusi"); ?></td>
                  <td><?php print("$alamat_institusi"); ?></td>
      						<td><?php print("$jenis_institusi"); ?></td>
      						<td><?php print("$jurusan"); ?></td>
                  <td><?php print("$alamat_kost"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-warning btn-sm"
                    href='editpendidikan.php?&id_pendidikan=<?php print("$id_pendidikan"); ?>'><i class="fa fa-edit"></i></a>
      							<a type="button" onclick="return confirm('Anda ingin menghapus Data Pendidikan?');" class="btn btn-danger btn-sm"
                    href='pendidikanhapus.php?&id_pendidikan=<?php print("$id_pendidikan"); ?>'><i class="fa fa-trash-o"></i></a>
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
