<?php
include "../+koneksi.php";
if($_SESSION['status'] !="login"){
	header("location:../index.php");
} 
?>
<br />
<h1>Daftar <span class="badge badge-secondary">artikel</span></h1>
<div class="table-responsive w-auto medium">
    <table border="0" class="table w-auto small">
	<tr>
	   <th scope="col">ID</th>
       <th scope="col">Judul</th>
       <th scope="col">Penulis</th>
       <th scope="col">Kata Kunci</th>
       <th scope="col">Abstrak</th>
       <th scope="col">Tanggal Input</th>
       <th scope="col">Opsi</th>		
    </tr>
        <?php 
		include "../+koneksi.php";
		$query = mysql_query("SELECT * FROM artikel");
        $cek   = mysql_num_rows($query);
        $batasi_kata = 50;
        if($cek==0){
             echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
        }else{
		while($data = mysql_fetch_array($query)) { ?>
		<tr>
			<td><?php echo $data['id_artikel']; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['penulis']; ?></td>
			<td><?php echo $data['kata_kunci']; ?></td>
			<td><?php echo substr($data[5], 0, $batasi_kata) . '...';?></td>
			<td><?php echo $data['tanggal_input']; ?></td>
			<td colspan="3" align="center">
               <a class="btn btn-primary" href="../berkas/<?php echo $data['file_artikel'];?>" data-toggle="tooltip" data-placement="top" title="Unduh"><i class="fa fa-download"></i></a>
               <a class="btn btn-success" href="form_edit.php?id=<?php echo $data['id_artikel']; ?>" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a>
               <a class="btn btn-danger" href="proses_hapus.php?id=<?php echo $data['id_artikel']; ?>" onclick="return confirm('Yakin hapus data?')" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>	
            </td>
        </tr>
		<?php
          }
        } ?>
    </table>
</div>