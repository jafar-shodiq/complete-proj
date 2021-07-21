        <div class="box-body">
          <form method="post" action="simpansiswa.php">
            <div class="col-sm-6">
              <table class="table borderless">
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

			        <td colspan="3">
              <button type="submit" name="simpansiswa" class="btn btn-info pull-right">Proses</button>
			        </td>
              </table>
            </div>
          </form>
        </div>