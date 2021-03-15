<?php 
include "../+koneksi.php";
$id = $_GET['id'];

$query = mysql_query("DELETE FROM pengguna WHERE id_user = '$id'") or die(mysql_error());

if($query) {
    echo "<script>history.go(-1);</script>";
} else {
    echo "<script>alert('Permintaan gagal ditolak!'); window.location='index.php';</script>";
}
?>