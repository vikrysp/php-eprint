<?php 
include '../+koneksi.php';
session_start();
$id = $_GET['id'];
    
    $query3 = mysql_query("INSERT INTO artikel (id_artikel, id_bidang, judul, penulis, tanggal_input, kata_kunci, abstrak, file_artikel) SELECT id_artikel, id_bidang, judul_artikel, penulis, tanggal_input, kata_kunci, abstrak, file_artikel FROM persetujuan WHERE id_artikel = '$id' ");
    
    if($query3){
        $query2 = mysql_query("DELETE FROM persetujuan WHERE id_artikel = '$id'") or die(mysql_error());
        if($query2){
            $query1 = mysql_query("UPDATE artikel SET status='1' WHERE id_artikel = '$id' ") or die(mysql_error());
            if($query1){
                echo "<script>alert('setuju telah terkirim!'); window.location='index.php';</script>"; 
            }
       
        }
    } else{
        echo 'setuju tidak terkirim, Coba lagi!';
    }
    
?>