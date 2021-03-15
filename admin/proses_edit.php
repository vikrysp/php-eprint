
<?php 
include '../+koneksi.php';
if($_POST['edit']){
    $id_artikel        = $_POST['id_artikel'];
    $judul             = $_POST['judul'];
    $penulis           = $_POST['penulis'];
    $kata_kunci        = $_POST['kata_kunci'];
    $abstrak           = addslashes($_POST['abstrak']);
    $namafile                   = $_FILES['file_artikel']['name'];
    $ekstensi_diperbolehkan     = array('pdf','docx','doc');
    $x                          = explode('.', $namafile);
    $ekstensi                   = strtolower(end($x));
    $ukuran                     = $_FILES['file_artikel']['size'];
    $file_tmp                   = $_FILES['file_artikel']['tmp_name']; 
 
    $query = mysql_query("UPDATE artikel SET judul='$judul', penulis='$penulis', kata_kunci='$kata_kunci', abstrak='$abstrak', file_artikel='$namafile' WHERE id_artikel='$id_artikel'");
      if($query){
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        }
        else{
            echo "<script>alert('File gagal di upload!'); window.location='index.php';</script>";
      }
    
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true || $judul == NULL){
            if($ukuran < 1044070){ 
                move_uploaded_file($file_tmp, '../berkas/'.$namafile);
                $query = mysql_query("UPDATE artikel SET judul='$judul', penulis='$penulis', kata_kunci='$kata_kunci', abstrak='$abstrak', file_artikel='$namafile' WHERE id_artikel='$id_artikel'");
                if($query){
                    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
                }
                else{
                    echo "<script>alert('File gagal di upload!'); window.location='index.php';</script>";
                }
            }
            else{
                echo "<script>alert('Ukuran file terlalu besar!'); window.location='index.php';</script>";
            }
      } else{
            echo "<script>alert('Ekstensi file yang diunggah tidak di perbolehkan!'); window.location='index.php';</script>";
      }
}
?>