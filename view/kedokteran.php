  <?php 
        include "+koneksi.php";
		$query = mysql_query("SELECT * FROM artikel INNER JOIN bidang_ilmu ON artikel.id_bidang=bidang_ilmu.id_bidang WHERE kategori='kedokteran'") or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query)) { ?>
        <div class="card" style="width: auto; float: center; margin: 10px;">
         <div class="card-body">  
            <h3 class="card-title"><?php echo $data['judul']; ?></h3>
            <p class="card-text"><?php echo $data['penulis']; ?></p>
            <p class="bold"><b>Kata kunci:&nbsp;</b><?php echo $data['kata_kunci']; ?></p>
            <p style="font-size:12px;"class="text-sm-left">Tersedia pada:&nbsp;<?php echo $data['tanggal_input']; ?></p>
            <p class="card-text">
             <a href="berkas/<?php echo $data['file_artikel']; ?>" download class="btn btn-outline-primary">PDF</a>
             <a href="#" class="btn btn-outline-secondary">Abstrak</a>
            </p>
          </div>
        </div>
	<?php
	} ?>