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
              $('#dataLogSensor').dataTable({
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
        Siswa Bekerja
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa Bekerja</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
       <!-- building table to put the data -->
          <div class="box box-warning">
              <div class="box-header">
                Informasi Siswa Bekerja
              </div>

              <div class="box-body">
      <div class="table-responsive">
              <table width="30%" class="table table-bordered table-hover" id="dataLogSensor">
              <thead>
               <tr>
                <th style="width:15%;"><center><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Nama</center></th>
                <th style="width:15%;"><center><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Tempat Tgl Lahir</center></th>
                <th style="width:8%;"><center><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;No. Hp</center></th>
                <th style="width:10%;"><center><i class="fa fa-building-o"></i>&nbsp;&nbsp;&nbsp;Kota</center></th>
                <th style="width:15%;"><center><i class="fa fa-share"></i>&nbsp;&nbsp;&nbsp;Lokasi</center></th>
                <th style="width:13%;"><center><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Tempat Kerja</center></th>
                <th style="width:8%;"><center><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Options</center></th>
               </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                                  date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT siswa.nama,siswa.ttl,siswa.no_hp, pekerjaan.kota, pekerjaan.lokasi, pekerjaan.nama_tempat_kerja FROM siswa INNER JOIN pekerjaan ON siswa.id_siswa=pekerjaan.id_siswa");
      				  while ($baris = mysqli_fetch_row($hasil))
                {

                $nama = $baris[0];
                $ttl = $baris[1];
                $no_hp = $baris[2];
      				  $kota = $baris[3];
      				  $lokasi = $baris[4];
      				  $nama_tempat_kerja = $baris[5];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
                  <td><?php print("$nama"); ?></td>
      						<td><?php print("$ttl"); ?></td>
      						<td><?php print("$no_hp "); ?></td>
      						<td><?php print("$kota"); ?></td>
                  <td><?php print("$lokasi"); ?></td>
                  <td><?php print("$nama_tempat_kerja"); ?></td>
                  <td align="center">

      							<a type="button" onclick="return confirm('Anda ingin menghapus Data?');" class="btn btn-danger btn-sm"
                    href='titikhapus.php?&id_siswa=<?php print("$id_siswa"); ?>'><i class="fa fa-trash-o"></i></a>
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