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
        Data
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Admin</li>
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
              <h3 class="box-title">Tambah Data Admin/User</h3>
            </div>
            <!-- /.box-header -->

        <div class="box-body">
          <form method="post" action="simpanadmin.php">
            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>ID_Admin&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="id_admin" class="form-control" required="" disabled>
                  </div>
              </td></tr>

              <tr><td>
                <label>Nama Admin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="namauser" class="form-control" required="">
                  </div>
              </td></tr>

              </table>
            </div>


            <div class="col-sm-6">
              <table class="table borderless">
              <tr><td>
                <label>Username&emsp;&emsp;&emsp;&ensp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="username" class="form-control" required="">
                  </div>
              </td></tr>

              <tr><td>
                <label>Password&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </div>
                    <input type="text" name="password" class="form-control" required="">
                  </div>
              </td></tr>

			        <td colspan="3">
              <button type="submit" name="simpanadmin" class="btn btn-info pull-right">Proses</button>
			        </td>
              </table>
            </div>
          </form>
        </div>
      </div>

      <!--///////////// End of CollapseTambah /////////////-->
      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus</h4>
              </div>
              <div class="modal-body">
                <p>Anda Yakin Ingin Menghapus Data Admin ?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" href='adminhapus.php?&id_admin=<?php print("$id_admin"); ?>' data-dismiss="modal" class="btn btn-primary">Hapus</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      <!-- building table to put the data -->
          <div class="panel panel-default">
              <div class="panel-heading">
                Informasi Admin/User
              </div>



              <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
              </div>

              <div class="panel-body">
              <div class="table-responsive">
              <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
              <tr>
                <th width="13%"><center><i class="fa fa-id-card-o"></i>&nbsp;&nbsp;&nbsp;ID Admin</center></th>
                <th width="13%"><center><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Nama Admin</center></th>
                <th width="13%"><center><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;&nbsp;Username</center></th>
                <th width="13%"><center><i class="fa fa-eye-slash"></i>&nbsp;&nbsp;&nbsp;Password</center></th>
                <th width="13%"><center><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Options</center></th>
              </tr>
              </thead>

              <tbody>
                <?php
      				  include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
                $hasil = mysqli_query ($koneksi, "SELECT * FROM admin");
      				  while ($baris = mysqli_fetch_row($hasil))
                  {
                $id_admin = $baris[0];
                $namauser = $baris[1];
      				  $username = $baris[2];
      				  $password = $baris[3];

      				  ?>
      					<tr align="center">
      						<!-- put data which we want to show via table -->
                  <td><?php print("$id_admin"); ?></td>
                  <td><?php print("$namauser"); ?></td>
      						<td><?php print("$username"); ?></td>
                  <td><?php print("$password"); ?></td>
      						<td align="center">
      							<a type="button" class="btn btn-warning btn-sm"
                    href='editadmin.php?&id_admin=<?php print("$id_admin"); ?>'><i class="fa fa-edit"></i></a>
                    <a type="button" onclick="return confirm('Anda ingin menghapus Data Admin?');" class="btn btn-danger btn-sm"
                    href='adminhapus.php?&id_admin=<?php print("$id_pekerjaan"); ?>'><i class="fa fa-trash-o"></i></a>
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