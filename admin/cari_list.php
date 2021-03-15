<form action="list_artikel.php" method="get">
  <input type="text" name="judul" class="form-control form-control-md" placeholder="Kata Kunci/Keywords" aria-label="Search">&nbsp;
  <input type="text" name="penulis" class="form-control form-control-md" placeholder="Penulis" aria-label="Search">&nbsp;
  <select class="form-control form-control-md" name="kategori">
        <option value="">Pilih Semua</option>
    <?php
        include "../+koneksi.php";
        $query = mysql_query("SELECT DISTINCT bidang_ilmu.kategori FROM bidang_ilmu INNER JOIN artikel ON artikel.id_bidang = bidang_ilmu.id_bidang "); 

      while($data = mysql_fetch_array($query)){
    ?>
        <option value="<?php echo $data['kategori'];?>"> 
            <?php echo $data['kategori'];?>
        </option> 
    <?php } ?>
  </select>&nbsp;
        <div class="input-group-append">
          <input type="submit" name="carilist" value="Cari List" class="btn btn-info btn-md">   
        </div>
 </form>
 