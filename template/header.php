<header class="masthead text-white text-center">
  <div class="overlay"></div>
    <div class="container" style="padding:50px;">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Cari Artikel Berdasarkan Disiplin Ilmu </h1>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-17 mx-auto" style="margin-bottom:20px;">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-12 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                <form action="view/artikel_pengunjung.php" method="get">
                  <input type="text" name="cari_judul" class="form-control form-control-lg" placeholder="Kata Kunci/Keywords" aria-label="Search">&nbsp;
                  <input type="text" name="cari_penulis" class="form-control form-control-lg" placeholder="Penulis" aria-label="Search">&nbsp;
                  <select class="form-control form-control-lg" name="cari_kategori">
                     <option value="">Pilih Semua</option>
                <?php
                    include "+koneksi.php";
                    $query = mysql_query("SELECT DISTINCT bidang_ilmu.kategori FROM bidang_ilmu INNER JOIN artikel ON artikel.id_bidang = bidang_ilmu.id_bidang "); 
                    while($data = mysql_fetch_array($query)){ ?>
                    <option value="<?php echo $data['kategori'];?>"><?php echo $data['kategori'];?></option> 
                 <?php } ?>
                  </select>&nbsp;
                  <div class="input-group-append">
                    <button type="submit" name="cari" value="Cari" class="btn btn-info btn-lg"><i class="fa fa-search"></i></button> 
                  </div>
                </form>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-17 mx-auto">
          <form>
            <div class="form-row" style="margin-bottom:10px;">
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=psikologi" type="submit" class="btn btn-block btn-lg btn-outline-warning">PSIKOLOGI</a>
                </div> 
              </div>
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=teknik" type="submit" class="btn btn-block btn-lg btn-outline-warning">TEKNIK</a>
                </div> 
              </div>
            </div>
            <div class="form-row" style="margin-bottom:10px;">
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=farmasi" type="submit" class="btn btn-block btn-lg btn-outline-warning">FARMASI</a>
                </div> 
              </div>
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=industri_kreatif" type="submit" class="btn btn-block btn-lg btn-outline-warning">INDUSTRI KREATIF</a>
                </div> 
              </div>
            </div>
            <div class="form-row" style="margin-bottom:10px;">
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=bisnis_ekonomi" type="submit" class="btn btn-block btn-lg btn-outline-warning">BISNIS DAN EKONOMI</a>
                </div> 
              </div>
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=hukum" type="submit" class="btn btn-block btn-lg btn-outline-warning">HUKUM</a>
                </div> 
              </div>
            </div>
            <div class="form-row" style="margin-bottom:10px;">
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=teknobiologi" type="submit" class="btn btn-block btn-lg btn-outline-warning">TEKNOBIOLOGI</a>
                </div> 
              </div>
              <div class="col-6 col-md-6 mb-2 mb-md-0">
                <div class="input-group md-form form-md form-2 pl-0">
                  <a href="index.php?sort=kedokteran" type="submit" class="btn btn-block btn-lg btn-outline-warning">KEDOKTERAN</a>
                </div> 
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</header>