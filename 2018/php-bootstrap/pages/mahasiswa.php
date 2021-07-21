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
        Mahasiswa
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
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
                <th style="width: 13%;"><center><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Nama</center></th>
                <th style="width: 18%;"><center><i class="fa fa-university"></i>&nbsp;&nbsp;&nbsp;Nama Inst.</center></th>
                <th style="width: 13%;"><center><i class="fa fa-street-view"></i>&nbsp;&nbsp;&nbsp;Alamat Kost</center></th>
                <th style="width: 13%;"><center><i class="fa fa-building-o"></i>&nbsp;&nbsp;&nbsp;Kota Inst.</center></th>
                <th style="width: 13%;"><center><i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;Media Sosial</center></th>
                <th style="width: 13%;"><center><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;No. Hp</center></th>
                <th style="width: 5%;"><center><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Options</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
      				  $hasil = mysqli_query ($koneksi, "SELECT siswa.nama , pendidikan_lanjut.nama_institusi, pendidikan_lanjut.alamat_kost, pendidikan_lanjut.alamat_institusi, siswa.media_sosial, siswa.no_hp FROM siswa INNER JOIN pendidikan_lanjut ON siswa.id_siswa=pendidikan_lanjut.id_siswa");
      				  while ($baris = mysqli_fetch_row($hasil))
                                        {

                $nama = $baris[0];
                $nama_institusi = $baris[1];
                $alamat_kost = $baris[2];
      				  $alamat_institusi = $baris[3];
      				  $media_sosial = $baris[4];
      				  $no_hp = $baris[5];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
                  <td><?php print("$nama"); ?></td>
      						<td><?php print("$nama_institusi"); ?></td>
      						<td><?php print("$alamat_kost "); ?></td>
                  <td><?php print("$alamat_institusi "); ?></td>
      						<td><?php print("$media_sosial"); ?></td>
                  <td><?php print("$no_hp"); ?></td>

                         <td align="center">

      							<a type="button" onclick="return confirm('Anda ingin menghapus Data Mahasiswa?');" class="btn btn-danger btn-sm"
                    href='titikhapus.php?&id=<?php print("$id_siswa"); ?>'><i class="fa fa-trash-o"></i></a>
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