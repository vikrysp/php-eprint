<?php
include "../+koneksi.php";
if($_SESSION['status'] !="login"){
	header("location:index.php");
} 
?>
<br />
<h1>Daftar Artikelmu <span class="badge badge-secondary">lihat</span></h1>
<div class="table-responsive w-auto medium">
    <table border="0" class="table w-auto small">
	<tr>
	   <th scope="col">ID Artikel</th>
       <th scope="col">ID Bidang</th>
       <th scope="col">Judul</th>
       <th scope="col">Penulis</th>
       <th scope="col">Kata Kunci</th>
       <th scope="col">Abstrak</th>
       <th scope="col">File Artikel</th>
       <th scope="col">Tanggal Input</th>
        <?php if($_SESSION['level'] == 1){ ?>
           <th scope="col">Opsi</th>
        <?php } ?>				
    </tr>
        <?php
if($_SESSION['level'] == 1) {
        $user = $_SESSION['id_user'];
		$query = mysql_query("SELECT * FROM persetujuan  ");
        $cek = mysql_num_rows($query);
        $batasi_kata = 50;
        
        if($cek==0){
             echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
        }else{
		  while($data = mysql_fetch_array($query)) { ?>
		  <tr>
			<td><?php echo $data['id_artikel']; ?></td>
			<td><?php echo $data['id_bidang']; ?></td>
			<td><?php echo $data['judul_artikel']; ?></td>
			<td><?php echo $data['penulis']; ?></td>
			<td><?php echo $data['kata_kunci']; ?></td>
			<td><?php echo substr($data['abstrak'], 0, $batasi_kata) . '...'; ?></td>
            <td><a class="btn btn-primary" href="../berkas/<?php echo $data['file_artikel'];?>">Unduh</a></td>
			<td><?php echo $data['tgl_setuju']; ?></td>
			<td width="90px" align="center">
                <a class="btn btn-success" href="form_lihatdetail.php?id=<?php echo $data['id_artikel']; ?>"> <span class="glyphicon glyphicon-edit"></span>Lihat</a>
                <a class="btn btn-danger" href="proses_batal.php?id=<?php echo $data['id_artikel']; ?>"> <span class="glyphicon glyphicon-edit"></span>Batal</a>
            </td>
          </tr>
		<?php
              }
        } 
} else {
        $user = $_SESSION['id_user'];
		$query = mysql_query("SELECT * FROM persetujuan WHERE id_user='$user' ");
        $cek = mysql_num_rows($query);
        $batasi_kata = 50;
        
        if($cek==0){
             echo "<tr><td colspan='9'>Tidak ada data ditemukan</td></tr>";
        }else{
		  while($data = mysql_fetch_array($query)) { ?>
		  <tr>
			<td><?php echo $data['id_artikel']; ?></td>
			<td><?php echo $data['id_bidang']; ?></td>
			<td><?php echo $data['judul_artikel']; ?></td>
			<td><?php echo $data['penulis']; ?></td>
			<td><?php echo $data['kata_kunci']; ?></td>
			<td><?php echo substr($data['abstrak'], 0, $batasi_kata) . '...'; ?></td>
            <td><a class="btn btn-primary" href="../berkas/<?php echo $data['file_artikel'];?>">Unduh</a></td>
			<td><?php echo $data['tgl_setuju']; ?></td>
          </tr>  
<?php
            }
        }
    }
        ?>
    </table>
</div>