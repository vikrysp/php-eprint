<?php 
include "../+koneksi.php";
$id = $_GET['id'];

$query = mysql_query("DELETE FROM permintaan WHERE id_artikel = '$id'") or die(mysql_error());
$query2 = mysql_query("UPDATE artikel SET status='1' ");

if($query) {
    echo "<script>alert('Permintaan berhasil ditolak!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Permintaan gagal ditolak!'); window.location='index.php';</script>";
}
?>