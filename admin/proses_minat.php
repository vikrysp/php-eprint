<?php 
include '../+koneksi.php';
session_start();
if($_POST['minta']){
    $id_artikel        = $_POST['id_artikel'];
    $id_bidang         = $_POST['id_bidang'];
    $id_user           = $_SESSION['id_user'];
   
    $query  = mysql_query("UPDATE artikel SET status='0' WHERE id_artikel='$id_artikel'");
    $query2 = mysql_query("INSERT INTO permintaan (id_artikel, id_bidang, id_user, status, tanggal_minta) VALUES ('$id_artikel','$id_bidang','$id_user','1' , NOW() )");
        if($query AND $query2){
            echo "<script>alert('Permintaan telah terkirim!'); window.location='index.php';</script>";
            }
        else{
            echo 'Permintaan tidak terkirim, Coba lagi!';
          }    
}
?>