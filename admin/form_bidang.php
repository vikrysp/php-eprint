<?php
include "../+koneksi.php";

if($_SESSION['status'] !="login"){
	header("location:../index.php");
} 
?>
<br />
<div class="col-lg-10">
<h1>Bidang Ilmu <span class="badge badge-secondary">tambah</span></h1>
 	<form action="proses_bidang.php" method="POST" enctype="multipart/form-data" class="custom-centered">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bidang Ilmu</label>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="nama_bidang" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-5">
            <select class="form-control" name="kategori">
                <option value="kedokteran">Kedokteran</option>
                <option value="psikologi">Psikologi</option>
                <option value="teknik">Teknik</option>
                <option value="industri kreatif">Industri Kreatif</option>
                <option value="bisnis dan Ekonomika">Bisnis dan Ekonomika</option>
                <option value="hukum">Hukum</option>
                <option value="farmasi">Farmasi</option>
                <option value="teknobiologi">Teknobiologi</option>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
          <input type="reset" name="reset" value="Reset" class="btn btn-warning">
        </div>
      </div>
    </form>
</div>