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
        Siswa
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
          <a class="btn btn-social btn-info" style=""data-toggle="collapse" data-target="#collTambah">
                <i class="fa fa-user-plus"></i> TAMBAH DATA
              </a>
          <!-- <button type="button" class="btn btn-social btn-info" style="" data-toggle="collapse" data-target="#collTambah"><i class="fa fa-user-plus"></i><b>TAMBAH DATA</b></button> -->
          
          <h2></h2>
          <!--///////////// Begin of CollapseTambah /////////////-->
      <div class="box box-info collapse" id="collTambah" style="margin-top: 20px;">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form method="post" action="simpansiswa.php">
              <div class="col-sm-6">
              	<table class="table borderless">
              	<!-- <tr>
		        		<th width="30%">ID Siswa</th>
		        		<td width="3%">:</td>
		        		<td><input type="text" name="id_siswa" class="form-control input-sm" required=""></td>
  		        	</tr>
  		        	<tr>
		        		<th>Nama</th>
		        		<td>:</td>
		        		<td><input type="text" name="nama" class="form-control input-sm" required=""></td>
		        	</tr>
                <tr>
		        		<th>Alamat</th>
                <td>:</td> -->
                
                <tr><td>
                <label>ID_Siswa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="id_siswa" class="form-control" required="" disabled>
                </div>
                </td></tr>

                <tr><td>
                <label>Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-tags"></i>
                  </div>
                  <input type="text" name="nama" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>

                <tr><td>
                <label>Alamat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-location-arrow" aria-hidden="true"></i>
                  </div>
                  <input type="text" name="alamat_siswa" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>

                <tr><td>
                <label>Tempat Tanggal Lahir&ensp; :</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="ttl" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>

                </table>
              </div>
                <!-- <td><input type="text" name="alamat_siswa" class="form-control input-sm" required=""></td>
                      </tr>
                      <tr>
		        		<th>Tempat Tgl Lahir</th>
		        		<td>:</td>
		        		<td><input type="text" name="ttl" class="form-control input-sm" required=""></td>
		        	</tr>
		            </table>
              </div> -->


              <div class="col-sm-6">
              	<table class="table borderless">

                <tr><td>
                <label>No.Handphone&emsp;&emsp;&emsp;&ensp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="no_hp" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>


                <tr><td>
                <label>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                  </div>
                  <input type="text" name="email" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>

                
                <tr><td>
                <label>Media Sosial&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-instagram"></i>
                  </div>
                  <input type="text" name="media_sosial" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                </td></tr>

                <tr><td>
                <label>Jenis Kelamin&emsp;&emsp;&emsp;&emsp;:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-transgender"></i>
                  </div>
                  <select type="text" name="jenis_kelamin" class="form-control" required="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                </td></tr>
                </div>

                <!-- <tr>
  		        	<th>No. Hp</th>
  		        	<td>:</td>
  		        	<td><input type="text" name="no_hp" class="form-control input-sm" required=""></td>
  		        	</tr>
                <tr>
  		        	<th>Email</th>
  		        	<td>:</td>
  		        	<td><input type="text" name="email" class="form-control input-sm" required=""></td>
  		        	</tr>
                <tr>
  		        	<th>Media Sosial</th>
  		        	<td>:</td>
  		        	<td><input type="text" name="media_sosial" class="form-control input-sm" required=""></td>
                    </tr>
                <tr>
                      <th>Jenis Kelamin</th>
                    <td>:</td>
  		        	<td>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              
                </td>
                    </tr>

			        	<tr> -->
			        		<td colspan="3">
			        			<button type="submit" name="simpansiswa" class="btn btn-info pull-right">Proses</button>
			        		</td>
			        	</tr>
              </table>
              </form>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

      <!--///////////// End of CollapseTambah /////////////-->

      <!-- building table to put the data -->
          <div class="panel panel-default">
              <div class="panel-heading">
                Informasi Data Siswa
              </div>

              <div class="panel-body">
                <div class="table-responsive">
                  <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
              <tr>
                <th width="7%"><center><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;ID Siswa</center></th>
                <th width="13%"><center><i class="fa fa-tags"></i>&nbsp;&nbsp;&nbsp;Name</center></th>
                <th width="15%"><center><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;Address</center></th>
                <th width="20%"><center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Date of Birth</center></th>
                <th width="4%"><center><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;No. Hp</center></th>
                <th width="8%"><center><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;Email</center></th>
                <th width="10%"><center><i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;Inst.</center></th>
                <th width="12%"><center><i class="fa fa-transgender"></i>&nbsp;Gender</center></th>
                <th width="28%%"><center><i class="fa fa-cog"></i>&nbsp;Optio.</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM siswa");
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
      					<tr align="center">
      						<!-- put data which we want to show via table -->
      						<td><?php print("$id_siswa"); ?></td>
      						<td><?php print("$nama"); ?></td>
                  <td><?php print("$alamat_siswa"); ?></td>
      						<td><?php print("$ttl"); ?></td>
      						<td><?php print("$no_hp"); ?></td>
                  <td><?php print("$email"); ?></td>
                  <td><?php print("$media_sosial"); ?></td>
                  <td><?php print("$jenis_kelamin"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-warning btn-sm" 
                    href='editsiswa.php?&id_siswa=<?php print("$id_siswa"); ?>'><i class="fa fa-edit"></i></a>
      							<a type="button" onclick="return confirm('Anda ingin menghapus Data Siswa?');" class="btn btn-danger btn-sm"
                    href='siswahapus.php?&id_siswa=<?php print("$id_siswa"); ?>'><i class="fa fa-trash-o"></i></a>
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
