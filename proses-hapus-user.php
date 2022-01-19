<?php 
    if($_GET['nama']){
        include ("../koneksi.php");
        $delete=mysqli_query($conn,"delete from user where nama='".$_GET['nama']."'");
        if($delete){
            echo "<script>alert('Sukses hapus data User!');location.href='tampil-user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data User! silakan coba kembali!');location.href='tampil-user.php';</script>";
        }
    }
?>