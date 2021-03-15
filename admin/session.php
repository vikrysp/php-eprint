<?php 
session_start();
include '../+koneksi.php';

$nama     = mysql_real_escape_string($_POST['nama']);
$password = crypt($_POST['password'], "jurn4lpp12019");

//cek data
$sql = "SELECT * FROM pengguna WHERE nama='$nama' ";
$qry = mysql_query($sql);
$usr = mysql_fetch_array($qry);

    if(($nama == $usr['nama']) AND ($password == $usr['password']) AND ($usr['level'] == 1 OR 2) AND ($usr['status'] != 0))
    {
     $_SESSION['id_user']   = $usr['id_user'];
     $_SESSION['nama']      = $usr['nama'];
     $_SESSION['level']     = $usr['level'];
     $_SESSION['login']     = 1;
     $_SESSION['status']    = "login";
        header("location:index.php");
    } 
    elseif(($nama) == ($usr['nama']) AND ($password) == ($usr['password']) AND ($usr['level'] == 1 OR 2) AND ($usr['status'] == 0)) {
      /*echo '<script type="text/javascript">alert("Pendaftaran Anda Sedang Diproses, Mohon untuk Menunggu");history.go(-1);</script>';*/
      header("location:../index.php?error=daftar_tunggu");
    } else {
      header("location:../index.php?error=akun_salah");
    }
?>