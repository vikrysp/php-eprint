<div id="myModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?php echo $pesan; ?>
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Silahkan Masuk</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form action="admin/session.php" method="post">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-username">Username</label>
              <input type="text" name="nama" id="nama" class="form-control validate" required>
            </div>
            <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
              <input type="password" id="password" name="password" class="form-control validate" required>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
             <button class="btn btn-primary" type="submit" value="Login" class="tombol"><i class="fa fa-send"></i>&nbsp;&nbsp;Masuk</button>
             <a class="btn btn-primary" data-toggle="modal" href="index.php" data-target="#myModalregis"><i class="fa fa-user-circle"></i>&nbsp;&nbsp;Daftar</a>
          </div>
        </form>
        </div>
      </div>
</div>