
<?php 
include '../+koneksi.php';
session_start();
if($_POST['setuju']){
    $id_artikel        = $_POST['id_artikel'];
    $id_bidang         = $_POST['id_bidang'];
    $id_user           = $_POST['id_user'];
    $judul_artikel     = $_POST['judul_artikel'];
    $penulis           = $_POST['penulis'];
    $kata_kunci        = $_POST['kata_kunci'];
    $abstrak           = addslashes($_POST['abstrak']);
    $tanggal_input     = $_POST['tanggal_input'];
    $file_artikel      = $_POST['file_artikel'];
   
    
    $query2 = mysql_query("INSERT INTO persetujuan (id_artikel, id_bidang, id_user, judul_artikel, penulis, tanggal_input, kata_kunci, abstrak, file_artikel, tgl_setuju) VALUES ('$id_artikel','$id_bidang', '$id_user', '$judul_artikel', '$penulis', '$tanggal_input', '$kata_kunci', '$abstrak', '$file_artikel', NOW() )");
    
    if($query2){
        $query1 = mysql_query("DELETE FROM artikel WHERE id_artikel = '$id_artikel'") or die(mysql_error());
        if($query1){
            echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";       
        }
    } else{
        echo 'Data tidak dapat disimpan, Coba lagi!';
    }
    
} else{
    echo "<script>alert('Error!'); window.location='index.php';</script>";
}
?>