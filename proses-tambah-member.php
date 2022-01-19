<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tlp=$_POST['tlp'];

        if(empty($nama || $alamat || $jenis_kelamin || $tlp)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='tambah-member.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan member!');location.href='tampil-member.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan member! silakan coba kembali!');location.href='tambah-member.php';</script>";
            }
        }
    }
?>