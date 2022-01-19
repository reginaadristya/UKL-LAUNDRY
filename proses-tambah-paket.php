<?php
    if($_POST){
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];

        if(empty($jenis || $harga)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='tambah-paket.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert=mysqli_query($conn,"insert into paket (jenis, harga) value ('".$jenis."','".$harga."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan Paket!');location.href='tampil-paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan Paket! silakan coba kembali!');location.href='tambah-paket.php';</script>";
            }
        }
    }
?>