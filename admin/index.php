<?php
session_start();
$login = $_SESSION['login'];
if($login == 1)
{
include "../+koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UBAYA</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="../css/landing-page.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<!-- Pop up -->
  <script src="../vendor/jquery/jquery-3.5.1.min.js"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })  
  </script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <?php 
        $level = $_SESSION['level'];
        if($level == 1) { include "nav_admin.php"; }
        if($level == 2) { include "nav_user.php"; }
        $nama = $_SESSION['nama'];
     ?>
  </nav>
  
  <!-- Content -->
  <div class="container">
    <div class="row">
        <div class="col-lg-3"><br />
        <?php         
        $level = $_SESSION['level'];
        if($level == 1) { ?>
          <a href="index.php?page=tambah_artikel" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Artikel</a>
          <a href="index.php?page=list_artikel" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Daftar Artikel</a>
          <a href="index.php?page=bidang" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Bidang Ilmu</a> 
          <a href="index.php?page=permintaan" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Permintaan</a> 
          <a href="index.php?page=persetujuan" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Arsip Artikel</a> 
          <a href="index.php?page=daftartunggu" type="submit" name="simpan" class="btn btn-dark btn-md btn-block">Daftar Member</a> 
         <?php } if($level == 2) { ?>
          <a href="index.php?page=permintaan" type="submit" name="simpan" class="btn btn-dark btn-lg btn-block">Daftar Permintaan</a>
          <a href="index.php?page=persetujuan" type="submit" name="simpan" class="btn btn-dark btn-lg btn-block">Artikel Dimiliki</a>
         <?php } ?> 
        <br />
        </div>
        <div class="col-lg-9">
        <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == "tambah_artikel") {
                    include "form_tambah.php";
                }
                elseif ($_GET['page'] == "edit_artikel") {
                    include "form_edit.php";
                }
                elseif ($_GET['page'] == "list_artikel") {
                    include "list_artikel.php";
                }
                elseif ($_GET['page'] == "bidang") {
                    include "form_bidang.php";
                }
                elseif ($_GET['page'] == "permintaan") {
                    include "daftar_minta.php";
                }
                elseif ($_GET['page'] == "persetujuan") {
                    include "daftar_persetujuan.php";
                }
                elseif ($_GET['page'] == "daftartunggu") {
                    include "form_daftartunggu.php";
                } 
                else {
                    include "tampil_artikel.php";
                }
            } else {
                    include "tampil_artikel.php";
            }
        ?>
        </div><br />  
  </div>
    </div>
  <!-- Call to Action -->
      <?php include "../template/footer_a.php"; ?>


  <!-- Footer -->
    <?php include "../template/footer_b.php"; ?>
      
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
}
else {
  header("location:../index.php");
} 
?>