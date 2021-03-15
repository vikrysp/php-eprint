<?php 
include '../+koneksi.php';

if($_POST['simpan']){
        $judul                      = $_POST['judul'];
        $penulis                    = $_POST['penulis'];
        $kata_kunci                 = $_POST['kata_kunci'];
        $abstrak                    = addslashes($_POST['abstrak']);
        $id_bidang                  = $_POST['id_bidang'];
        $status                     = 1;
        $namafile                   = $_FILES['file_artikel']['name'];
        $ekstensi_diperbolehkan     = array('pdf','docx','doc');
        $x                          = explode('.', $namafile);
        $ekstensi                   = strtolower(end($x));
        $ukuran                     = $_FILES['file_artikel']['size'];
        $file_tmp                   = $_FILES['file_artikel']['tmp_name']; 
     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 8044070){ 
                move_uploaded_file($file_tmp, '../berkas/'.$namafile);
                $query = mysql_query("INSERT INTO artikel (id_bidang, status, judul, penulis, tanggal_input, kata_kunci, abstrak, file_artikel) VALUES ('$id_bidang','$status', '$judul', '$penulis', NOW(), '$kata_kunci', '$abstrak', '$namafile')") or die(mysql_error());
                if($query){
                    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
                }
                else{
                    echo 'FILE GAGAL DI UPLOAD!';
                }
            }
            else{
                echo 'UKURAN FILE TERLALU BESAR!';
            }
        }
        else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
        }
    }
?>