<?php 
session_start();
if(isset($_SESSION['login'])){
    header('location: admin/index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<?php include "admin/pesan_error.php"; ?>
<head>
    <?php  include "template/head.php";  ?>
</head>
<body>
  <!-- Login mODAL -->
 <?php include "modal_login.php"; ?>
 <?php include "form_regis.php"; ?>
  <!-- Navigation -->
 <?php include "template/navigation.php"; ?>
  <!-- Masthead -->
 <?php include "template/header.php" ?>
  
  <!-- Content -->
  <div class="container">        
    <?php
    if (isset($_GET['page'])) {

        if ($_GET['page'] == "daftar") {
            include "form_regis.php";
        } elseif ($_GET['page'] == "edit_artikel") {
            include "#";
        } else {
            include "view/artikel_pengunjung.php";
        }

    } 
    elseif (isset($_GET['sort'])) {

        if ($_GET['sort'] == "psikologi") {
            include "view/psikologi.php";
        } elseif ($_GET['sort'] == "teknik") {
            include "view/teknik.php";
        } elseif ($_GET['sort'] == "farmasi") {
            include "view/farmasi.php";
        } elseif ($_GET['sort'] == "teknobiologi") {
            include "view/teknobiologi.php";
        } elseif ($_GET['sort'] == "hukum") {
            include "view/hukum.php";
        } elseif ($_GET['sort'] == "industri_kreatif") {
            include "view/industri_kreatif.php";
        } elseif ($_GET['sort'] == "bisnis_ekonomi") {
            include "view/bisnis_ekonomi.php";
        } elseif ($_GET['sort'] == "kedokteran") {
            include "view/kedokteran.php";
        }
        else { include "view/artikel_pengunjung.php"; }
    }
        else { include "view/artikel_pengunjung.php"; }
    ?>
  </div>
  <!-- Alur Website --> 
  <?php include "template/testimoni.php"; ?>
  <!-- Call to Action -->
  <?php include "template/footer_a.php"; ?>
  <!-- Footer -->
  <?php include "template/footer_b.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
