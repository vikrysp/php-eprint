<?php 
include '../+koneksi.php';

if($_POST['simpan']){
        $nama_bidang      = $_POST['nama_bidang'];
        $kategori         = $_POST['kategori'];

        $query = mysql_query("INSERT INTO bidang_ilmu (nama_bidang, kategori) VALUES ('$nama_bidang','$kategori')") or die(mysql_error());
        
        if($query){
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        } else{
            echo 'FILE GAGAL DI UPLOAD!';
        }    
    }
?>