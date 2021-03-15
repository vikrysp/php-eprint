<?php 
include '../+koneksi.php';

if($_POST['daftar']){
        $nama_depan        = $_POST['nama_depan'];
        $nama_belakang     = $_POST['nama_belakang'];
        $nama              = $_POST['nama'];
        $password          = $_POST['password'];
        $password2         = $_POST['password2'];
        $passwd_crypt       = crypt($password, "jurn4lpp12019");
        $email             = $_POST['email'];
        $asal              = $_POST['asal'];
        $pengelola         = $_POST['pengelola'];
        $nama_valid        = true;
        $password_valid    = true;
  /*  
     if(!preg_match("\s",$nama)){
		$nama_valid     = false;
		$nama_valid_msg = "Karaketer kosong seperti spasi.<br>";
	 }
    
     if(!preg_match("/^[a-zA-Z]*$/",$password)){
		$password_valid     = false;
		$password_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
	 }
 */
     if($password == $password2 /*AND $nama_valid AND $password_valid*/){    
        $query = mysql_query("INSERT INTO pengguna (nama_depan, nama_belakang, nama, password, email, asal, pengelola, level, status) VALUES ('$nama_depan','$nama_belakang', '$nama', '$passwd_crypt', '$email', '$asal', '$pengelola', 2, 0)") or die(mysql_error());
           if($query){
               echo "<script>alert('Registrasi Berhasil!'); window.location='../index.php';</script>";
           }else{
               echo "<script>alert('Data gagal ditambahkan!'); window.location='../index.php';</script>";
           } 
     } else{
          echo "<script>alert('Password Tidak Sama'); history.go(-1);</script>";
     }
       
    }
 
?>