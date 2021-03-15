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

  <!-- Custom styles for this template -->
  <link href="../css/landing-page.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <?php include "nav_admin.php"; ?>
  
  <!-- Content -->
  <div class="container"> 
    <br />
    <h1>Persetujuan <span class="badge badge-secondary">artikel</span></h1>
 	<form action="proses_persetujuan.php" method="post" enctype="multipart/form-data">
    <?php 
	   $id = $_GET['id'];
       $query  = mysql_query("SELECT * FROM artikel WHERE id_artikel = '$id'");
       $query2 = mysql_query("SELECT * FROM permintaan WHERE id_artikel = '$id'");
       $data = mysql_fetch_array($query);
       $data2 = mysql_fetch_array($query2);
    ?>
      <div class="form-group row">
        <label class="col-sm-10 col-form-label">Apakah anda yakin ingin mengambil artikel ini?</label>  
      </div>
      <div class="form-group row"> 
          <input type="hidden" name="id_user"    value="<?php echo $data2['id_user']; ?>">
          <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel']; ?>">
          <input type="hidden" name="id_bidang"  value="<?php echo $data['id_bidang']; ?>">
          <input type="hidden" name="judul_artikel" value="<?php echo $data['judul']; ?>">            
          <input type="hidden" name="penulis"       value="<?php echo $data['penulis']; ?>">
          <input type="hidden" name="tanggal_input" value="<?php echo $data['tanggal_input']; ?>">
          <input type="hidden" name="kata_kunci"    value="<?php echo $data['kata_kunci']; ?>">          
          <input type="hidden" name="abstrak"       value="<?php echo $data['abstrak']; ?>">
          <input type="hidden" name="file_artikel" value="<?php echo $data['file_artikel']; ?>">
          <input type="submit" name="setuju"       value="Kirim" class="btn btn-primary" style="width:100px;">
      </div>

    </form>
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
    