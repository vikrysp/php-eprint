<?php 
if (isset($_GET['error']))
{
   $error=$_GET['error'];
}
else
{
   $error="";
}
  
$pesan="";
if ($error=="daftar_tunggu")
{     
   $pesan=
     '<script> 
        $(document).ready(function(){ $("#myModal").modal("show"); });</script>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Maaf Akun!</strong> Pendaftaran Akunmu Sedang Diproses.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>';
}
if ($error=="akun_salah")
{
   $pesan=
     '<script> 
        $(document).ready(function(){ $("#myModal").modal("show"); });</script>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf!</strong> Password atau Username Anda Salah .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>';
}
if ($error=="nama_harus_huruf")
{
   $pesan="<h3>Maaf, nama harus berupa huruf</h3>";
}
?>
