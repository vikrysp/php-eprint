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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <h1>Artikel <span class="badge badge-secondary">edit</span></h1>
 	<form action="proses_edit.php" method="post" enctype="multipart/form-data">
		<?php 
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM artikel WHERE id_artikel = '$id'");
		$data = mysql_fetch_array($query);

		?>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">File</label>
        <div class="col-sm-10">
                <input type="file" class="form-control-file" name="file_artikel" value="<?php echo $data['file_artikel']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul Artikel</label>
        <div class="col-sm-10">
            <input type="hidden" name="id_artikel" value="<?php echo $data['id_artikel'] ?>">
            <input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
             <input class="form-control" type="text" name="penulis" value="<?php echo $data['penulis']; ?>" required>
        </div>
      </div>
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kata kunci</label>
        <div class="col-sm-10">
              <input class="form-control" type="text" name="kata_kunci" value="<?php echo $data['kata_kunci']; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Abstrak</label>
        <div class="col-sm-10">
            <textarea style="height:500px;" class="form-control" id="exampleFormControlTextarea1" rows="3" name="abstrak" required><?php echo $data['abstrak'] ?></textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" name="edit" value="Edit" class="btn btn-primary">         
          <input type="reset" value="Reset" class="btn btn-warning">
        </div>
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

    