<?php
include "../+koneksi.php";

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}?>	
<br />
<h1>Artikel <span class="badge badge-secondary">tambah</span></h1>
<form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
      <div class="form-group-lg row">
        <label class="col-sm-2 col-form-label">File</label>
        <div class="col-sm-10">
            <input  type="file" class="form-control-file" name="file_artikel" required data-toggle="tooltip" data-placement="bottom" title="Perhatikan, Isi dengan File yang berekstensi .Doc/.Docx">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul Artikel</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="judul" required required data-toggle="tooltip" data-placement="bottom" title="Sesuaikan dengan Nama Judul yang Tertera pada Artikel yang Diunggah">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-3">
            <select class="form-control" name="id_bidang" data-toggle="tooltip" data-placement="right" title="Pilih Kategori yang Paling Sesuai dengan Kategori Artikel">
            <?php 
			$query = mysql_query("SELECT * FROM bidang_ilmu");
			while($data = mysql_fetch_array($query)) { ?>
                <option value="<?php echo $data['id_bidang']; ?>"><?php echo $data['nama_bidang']; ?></option>
			<?php
			} ?>
            </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
             <input class="form-control" type="text" name="penulis" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kata kunci</label>
        <div class="col-sm-10">
              <input class="form-control" type="text" name="kata_kunci" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Abstrak</label>
        <div class="col-sm-10">
            <textarea rows="20" cols="100" class="form-control" name="abstrak" required></textarea><br />
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-warning">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          
        </div>
      </div>
</form>
