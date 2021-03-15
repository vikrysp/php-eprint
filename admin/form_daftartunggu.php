<?php
include "../+koneksi.php";

if(($_SESSION['status'] != "login")){
	header("location:../index.php");
}?>	
<br />
<h1>Daftar Member <span class="badge badge-secondary">list</span></h1>
<div class="table-responsive w-auto medium">
  <table class="table table-hover" class="table w-auto small">
      <tr>
          <th scope="col">ID User</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Institusi</th>
          <th scope="col">Pengelola</th>
          <th colspan="3" scope="col">Opsi</th>
      </tr>
<?php 
    if($_SESSION['level'] == 1){
        $query = mysql_query("SELECT * FROM pengguna WHERE level='2' ");
        $cek   = mysql_num_rows($query);
        if($cek==0){
             echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
        }else{
          while($data = mysql_fetch_array($query)) { ?>
			<tr>
			 <td><?php echo $data['id_user']; ?></td>
             <td><?php echo $data['nama']; ?></td>
             <td><?php echo $data['email']; ?></td>
             <td><?php echo $data['asal']; ?></td>
			 <td><?php echo $data['pengelola']; ?></td>
        <?php if($data['status'] == 0){ ?>
             <td colspan="2">
                  <a class="btn btn-success" href="proses_daftartunggu.php?id=<?php echo $data['id_user']; ?>" onclick="return confirm('Konfirmasi Permintaan?')"><i class="fa fa-check" data-toggle="tooltip" data-placement="top" title="Terima"></i></a>
        <?php } ?>  
                <td>
                  <a class="btn btn-danger" href="proses_tolakuser.php?id=<?php echo $data['id_user']; ?>" onclick="return confirm('Yakin Menolak Permintaan?')" data-toggle="tooltip" data-placement="top" title="Tolak"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php } 
        }
    } else {
             echo "<script>history.go(-1);</script>";
        }?>
  </table>
</div>