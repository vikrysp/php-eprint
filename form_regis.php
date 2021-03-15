<div id="myModalregis" class="modal fade bd-example-modal-lg">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
          <?php echo $pesan; ?>
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Mohon Isi Data dengan Benar!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="user/proses_regis.php" method="POST" enctype="multipart/form-data" style="padding:5%;">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-drivers-license"></i>&nbsp;Nama Depan</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nama_depan" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-drivers-license"></i>&nbsp;Nama Belakang</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nama_belakang" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-user"></i>&nbsp;Username</label>
        <div class="col-sm-9">
             <input class="form-control" type="text" name="nama" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-institution"></i>&nbsp;Asal Institusi</label>
        <div class="col-sm-9">
             <input class="form-control" type="text" name="asal" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-institution"></i>&nbsp;Nama Jurnal Anda</label>
        <div class="col-sm-9">
             <input class="form-control" type="text" name="pengelola" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-envelope"></i>&nbsp;Email</label>
        <div class="col-sm-9">
             <input class="form-control" type="email" name="email" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-lock"></i>&nbsp;Kata Sandi</label>
        <div class="col-sm-9">
              <input class="form-control" type="password" name="password" required minlength="8" maxlength="15">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label"><i class="fa fa-lock"></i>&nbsp;Ulangi Kata Sandi</label>
        <div class="col-sm-9">
              <input class="form-control" type="password" name="password2" required minlength="8" maxlength="15">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <input type="submit" name="daftar" value="Daftar" class="btn btn-success btn-lg btn-block">          
        </div>
        <div class="col-sm-6">
            <input type="reset" name="reset" value="Reset" class="btn btn-warning btn-lg btn-block">
        </div>
      </div>
    </form>
    </div>
</div>
</div>
 	