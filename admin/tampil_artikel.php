<?php 
include "../+koneksi.php";
    if(isset($_GET['cari'])){
        $cari_judul   = $_GET['cari_judul'];
        $cari_penulis = $_GET['cari_penulis'];
        $cari_kategori = $_GET['cari_kategori'];
        if ($cari_judul OR $cari_penulis OR $cari_kategori){
            echo "<br />";
            echo "<h3 class='display-4'>Hasil pencarian : ".$cari_judul.", ".$cari_penulis.", ".$cari_kategori."</h3>";
        } elseif ($cari_judul OR $cari_penulis OR $cari_kategori != null)  {
            echo "<br />";
            echo "<h6 class='display-4'>Hasil pencarian: Tidak Di Temukan </h6>"; 
        } else {
            echo "";
        }
    }
 ?>

 <?php 
     if(isset($_GET['cari'])){
          $cari_judul    = $_GET['cari_judul'];
          $cari_penulis  = $_GET['cari_penulis'];
          $cari_kategori = $_GET['cari_kategori'];
          $halaman = 3;
          $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $result = mysql_query("SELECT * FROM artikel INNER JOIN bidang_ilmu ON artikel.id_bidang = bidang_ilmu.id_bidang WHERE artikel.judul like '%".$cari_judul."%' AND artikel.penulis like '%".$cari_penulis."%' AND bidang_ilmu.kategori like '%".$cari_kategori."%'");
          $total = mysql_num_rows($result);
          $pages = ceil($total/$halaman);            
          $no =$mulai+1;
          $query = mysql_query("SELECT * FROM artikel INNER JOIN bidang_ilmu ON artikel.id_bidang = bidang_ilmu.id_bidang WHERE artikel.judul like '%".$cari_judul."%' AND artikel.penulis like '%".$cari_penulis."%' AND bidang_ilmu.kategori like '%".$cari_kategori."%' LIMIT $mulai, $halaman ");	
    }else{
          $halaman = 3;
          $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $result = mysql_query("SELECT * FROM artikel");
          $total = mysql_num_rows($result);
          $pages = ceil($total/$halaman);            
          $no =$mulai+1;
          $query = mysql_query("select * from artikel LIMIT $mulai,     $halaman");	
    }
          while($data = mysql_fetch_array($query)){
?>
        <div class="card" style="width: auto; float: center; margin: 10px;">
         <div class="card-body">  
            <h3 class="card-title"><?php echo $data['judul']; ?></h3>
            <p class="card-text"><?php echo $data['penulis']; ?></p>
            <p class="bold"><b>Kata kunci:&nbsp;</b><?php echo $data['kata_kunci']; ?></p>
            <p style="font-size:12px;"class="text-sm-left">Tersedia pada:&nbsp;<?php echo $data['tanggal_input']; ?></p>
            <p class="card-text">
             <a href="../berkas/<?php echo $data['file_artikel']; ?>" download class="btn btn-outline-primary">PDF</a>
             <a href="#" class="btn btn-outline-info">Abstrak</a>
            <?php
            if($data['status'] == 1)
            {
            ?>
             <a href="form_minat.php?id=<?php echo $data['id_artikel']; ?>" class="btn btn-success">Minat</a>
            <?php } ?>
            </p>
          </div>
        </div>
        <?php } 
?>
<div class="">
<?php if ($pages != 1){ ?>
  <a class="btn btn-dark" href="?halaman=<?php echo $i=0; ?>">Awal</a>
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a class="btn btn-outline-dark" href="?halaman=<?php echo $i; ?>">
    <?php echo $i; ?>
  </a><?php } ?>
  <a class="btn btn-dark" href="?halaman=<?php echo $pages; ?>">Akhir</a>
<?php } else { } ?>
</div>



      