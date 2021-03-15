<?php 
include "../+koneksi.php";
$id = $_GET['id'];


$query2 = mysql_query("UPDATE pengguna SET status='1' WHERE id_user='$id' ");

if($query2) {
    echo "<script>history.go(-1);</script>";
} else {
    echo "<script>alert('Data gagal diubah!'); window.location='index.php';</script>";
}
?>