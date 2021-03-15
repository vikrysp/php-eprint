<?php
include "../+koneksi.php";

if($_SESSION['status'] != "login"){
	header("location:../index.php");
}?>	
<br />
<h1>Permintaan <span class="badge badge-secondary">list</span></h1>
<div class="table-responsive w-auto medium">
    <table class="table table-hover" class="table w-auto small">
		<tr>
	       <th scope="col">ID Artikel</th>
           <th scope="col">Bidang Ilmu</th>
           <th scope="col">Username</th>
           <th scope="col">Judul</th>
           <th scope="col">Tanggal Minta</th>
        <?php if($_SESSION['level'] == 1){ ?>
           <th scope="col">Opsi</th>
        <?php } ?>
        </tr>
		<?php 
        if($_SESSION['level'] == 1){
		  $query = mysql_query("SELECT permintaan.tanggal_minta, permintaan.id_artikel, artikel.judul, permintaan.id_bidang, bidang_ilmu.nama_bidang, pengguna.nama FROM permintaan, artikel, bidang_ilmu, pengguna WHERE permintaan.id_artikel=artikel.id_artikel AND bidang_ilmu.id_bidang=permintaan.id_bidang AND pengguna.id_user=permintaan.id_user");
          $batasi_kata = 50;
          $cek = mysql_num_rows($query);
            if($cek==0){
                 echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
            }else{
              while($data = mysql_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $data['id_artikel']; ?></td>
                    <td><?php echo $data['nama_bidang']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_minta']; ?></td>
                    <td colspan="3">
                        <a class="btn btn-success" href="form_persetujuan.php?id=<?php echo $data['id_artikel']; ?>" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fa fa-check"></i></a>
                        <a class="btn btn-danger" href="proses_tolak.php?id=<?php echo $data['id_artikel']; ?>" onclick="return confirm('Yakin Menolak Permintaan?')" data-toggle="tooltip" data-placement="top" title="Tolak"><i class="fa fa-eraser"></i></a>
                    </td>
                </tr> <?php }
            }   
        } else { 
        $id_user = $_SESSION['id_user'];
        $query = mysql_query("SELECT permintaan.tanggal_minta, permintaan.id_artikel, artikel.judul, permintaan.id_bidang, bidang_ilmu.nama_bidang, pengguna.nama FROM permintaan, artikel, bidang_ilmu, pengguna WHERE permintaan.id_artikel=artikel.id_artikel AND bidang_ilmu.id_bidang=permintaan.id_bidang AND pengguna.id_user=permintaan.id_user AND permintaan.id_user = '$id_user' ");
        $batasi_kata = 50;
        $cek = mysql_num_rows($query);
        if($cek==0){
             echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
        }else{
          while($data = mysql_fetch_array($query)) { ?>
			<tr>
				<td><?php echo $data['id_artikel']; ?></td>
                <td><?php echo $data['nama_bidang']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['tanggal_minta']; ?></td>
            </tr>
       <?php }
        }
      } ?>
	</table>
</div>