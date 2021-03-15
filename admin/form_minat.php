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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <?php 
        $level = $_SESSION['level'];
        if($level == 1) { include "nav_admin.php"; }
        if($level == 2) { include "nav_user.php"; }
     ?>
        <hr>
     <?php 
            $nama  = $_SESSION['nama'];
     ?>
  </nav>
  
  <!-- Content -->
  <div class="container"> 

    <br />
    <h1>Form Permintaan <span class="badge badge-secondary">artikel</span></h1>
 	<form action="proses_minat.php" method="post" enctype="multipart/form-data">
		<?php 
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM artikel WHERE id_artikel = '$id'");
		$data = mysql_fetch_array($query);
		?>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul Artikel</label>
        <div class="col-sm-10">
            <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel'] ?>">
            <input type="hidden" name="id_bidang" value="<?php echo $data['id_bidang'] ?>">
            <input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" disabled required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
             <input class="form-control" type="text" name="penulis" value="<?php echo $data['penulis'] ?>" required disabled>
        </div>
      </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kata kunci</label>
        <div class="col-sm-10">
              <input class="form-control" type="text" name="kata_kunci" value="<?php echo $data['kata_kunci']; ?>" required disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Abstrak</label>
        <div class="col-sm-10">
            <textarea style="height:500px;" class="form-control" id="exampleFormControlTextarea1" rows="3" name="abstrak" required disabled><?php echo $data['abstrak']; ?></textarea>
            <input type="submit" name="minta" value="Kirim Permintaan" class="btn btn-primary">
        </div>
      </div>
    </form>
</div>
  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
      <?php include "../template/footer_a.php"; ?>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <?php include "../template/footer_b.php"; ?>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
}
else {
  header("location:index.php");
} 
?>   

    