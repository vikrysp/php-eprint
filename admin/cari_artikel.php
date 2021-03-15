<!-- <form>
<div class="form-group">  <br />             
   <form action="tampil_artikel.php" method="get">
     <input type="text" name="cari_judul" class="form-control form-control-md" placeholder="Kata Kunci/Keywords" aria-label="Search">&nbsp;
     <input type="text" name="cari_penulis" class="form-control form-control-md" placeholder="Penulis" aria-label="Search">&nbsp;
       <select class="form-control form-control-md" name="cari_kategori">
          <option value="">Pilih Semua</option>
             <?php
             include "../+koneksi.php";
               $query = mysql_query("SELECT DISTINCT bidang_ilmu.kategori FROM bidang_ilmu INNER JOIN artikel ON artikel.id_bidang = bidang_ilmu.id_bidang "); 
               while($data = mysql_fetch_array($query)){ ?>
               <option value="<?php echo $data['kategori'];?>"><?php echo $data['kategori'];?></option> <?php } ?>
          </select>&nbsp;
        <div class="input-group-append">
             <input type="submit" name="cari" value="Cari" class="btn btn-info btn-md">   
        </div>
    </form>
</div>
</form> -->
 <div class="col-md-12 col-md-12 col-xl-17 mx-auto" style="margin-bottom:20px;">
    <form><br />
        <div class="form-row">
          <div class="col-12 col-md-12 mb-2 mb-md-0">
            <div class="input-group md-form form-md form-2 pl-0">
            <form action="tampil_artikel.php" method="get">
              <input type="text" name="cari_judul" class="form-control form-control-md" placeholder="Kata Kunci/Keywords" aria-label="Search">&nbsp;
              <input type="text" name="cari_penulis" class="form-control form-control-md" placeholder="Penulis" aria-label="Search">&nbsp;
              <select class="form-control form-control-md" name="cari_kategori">
                <option value="">Pilih Semua</option>
                <?php
                include "+koneksi.php";
                    $query = mysql_query("SELECT DISTINCT bidang_ilmu.kategori FROM bidang_ilmu INNER JOIN artikel ON artikel.id_bidang = bidang_ilmu.id_bidang "); 
                    while($data = mysql_fetch_array($query)){ ?>
                    <option value="<?php echo $data['kategori'];?>">
                        <?php echo $data['kategori'];?>
                    </option> 
                 <?php } ?>
                  
                </select>&nbsp;
                <div class="input-group-append">
                    <button type="submit" name="cari" value="Cari" class="btn btn-info btn-md"><i class="fa fa-search"></i></button> 
                </div>
                </form>
                </div>
              </div>
            </div>
     </form>
</div>