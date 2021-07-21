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
        Riwayat
        <small>Studi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Riwayat Studi</li>
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
          <h3 class="box-title">Tambah Riwayat Studi</h3>
        </div>
            <!-- /.box-header -->

        <div class="box-body">
          <form method="post" action="simpanriwayat.php">
            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>ID_Studi&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_studi" class="form-control" required="" disabled>
                  </div>
              </td></tr>

              <tr><td>
                <label>ID Siswa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_siswa" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Tahun Lulus&emsp;&emsp;&emsp;&ensp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="tahun_lulus" class="form-control" required="">
                  </div>
              </td></tr>
              </table>
            </div>


            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>Jurusan SMA&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                    <select type="text" name="jurusan_sma" class="form-control" required="">
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                  </div>
              </td></tr>

              <tr><td>
                <label>Kelas&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                    </div>
                    <select type="text" name="kelas" class="form-control" required="">
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                    </select> 
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
                Informasi Riwayat Studi
              </div>

              <div class="panel-body">
                <div class="table-responsive">
                <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
              <tr>
                <th width="15%"><center><i class="fa fa-address-card-o" aria-hidden="true"></i>&ensp;ID_Studi</center></th>
                <th width="18%"><center><i class="fa fa-edit" aria-hidden="true"></i>&ensp;ID Siswa</center></th>
                <th width="18%"><center><i class="fa fa-check-square-o" aria-hidden="true"></i>&ensp;Tahun Lulus</center></th>
                <th width="15%"><center><i class="fa fa-list-ul" aria-hidden="true"></i>&ensp;Jurusan SMA</center></th>
                <th width="15%"><center><i class="fa fa-list-ol" aria-hidden="true"></i>&ensp;Kelas</center></th>
                <th width="15%"><center><i class="fa fa-cog" aria-hidden="true"></i>&ensp;Options</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM riwayat_studi");
      				  while ($baris = mysqli_fetch_row($hasil))
                  {
                $id_studi = $baris[0];
      				  $id_siswa = $baris[1];
      				  $tahun_lulus = $baris[2];
      				  $jurusan_sma = $baris[3];
                $kelas = $baris[4];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
      						<td><?php print("$id_studi"); ?></td>
      						<td><?php print("$id_siswa"); ?></td>
                  <td><?php print("$tahun_lulus"); ?></td>
      						<td><?php print("$jurusan_sma"); ?></td>
      						<td><?php print("$kelas"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-warning btn-sm"
                    href='editriwayat.php?&id_studi=<?php print("$id_studi"); ?>'><i class="fa fa-edit"></i></a>
      							<a type="button" onclick="return confirm('Anda ingin menghapus Riwayat Studi?');" class="btn btn-danger btn-sm"
                    href='riwayathapus.php?&id_studi=<?php print("$id_studi"); ?>'><i class="fa fa-trash-o"></i></a>
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
