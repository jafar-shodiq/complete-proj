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
        Log
        <small>Sensor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Titik Lokasi</li>
      </ol>
    </section>

    <div class="content">
      <div class="row">
          <div class="col-lg-12">
       <!-- building table to put the data -->
          <div class="box box-warning">
              <div class="box-header">
                Informasi Titik Pengambilan Data
              </div>

              <div class="box-body">
      <div class="table-responsive">
              <table width="30%" class="table table-bordered table-hover" id="dataLogSensor">
              <thead>
               <tr>
                <th style="width: 10%;"><center>Data</center></th>
                <th style="width: 10%;"><center>ID Device</center></th>
                <th style="width: 10%;"><center>Device</center></th>
                <th style="width: 25%;"><center>Timestamp</center></th>
                <th style="width: 15%;"><center>Jarak (inchi)</center></th>
                <th style="width: 15%;"><center>Jarak (senti)</center></th>
                <th style="width: 15%;"><center>Options</center></th>
               </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                                  date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT logsensor.id_data, devicedata.id_device, devicedata.nama_device, logsensor.waktu, logsensor.inchi, logsensor.senti, devicedata.latitude, devicedata.langitude FROM logsensor INNER JOIN devicedata ON devicedata.id_device = logsensor.id_device");
      				  while ($baris = mysqli_fetch_row($hasil))
                                        {

                $id_data = $baris[0];
                $id_device = $baris[1];
                $nama_device = $baris[2];
      				  $waktu = $baris[3];
      				  $inchi = $baris[4];
      				  $senti = $baris[5];
                $latitude = $baris[6];
                $langitude = $baris[7];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
      						<td><?php print("$id_data"); ?></td>
                  <td><?php print("$id_device"); ?></td>
                  <td><?php print("$nama_device"); ?></td>
      						<td><?php print("$waktu"); ?></td>
      						<td><?php print("$inchi inch"); ?></td>
      						<td><?php print("$senti cm"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-success btn-md"
                    href="https://www.google.co.id/maps/search/<?php print("$latitude"); ?>,<?php print("$langitude"); ?>"
                    target="_blank"><i class="fa fa-location-arrow"> </i></a>

      							<a type="button" onclick="return confirm('Anda ingin menghapus Data?');" class="btn btn-danger btn-md"
                    href='titikhapus.php?&id=<?php print("$id_data"); ?>'><i class="fa fa-trash-o"></i></a>
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
