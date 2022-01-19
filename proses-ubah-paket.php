<?php
    if($_POST){
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];

        if(empty($jenis || $harga)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../paket/ubah-paket.php?jenis=$jenis'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update paket set jenis='$jenis', harga='$harga' where jenis='$jenis'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data Paket!');location.href='../paket/tampil-paket.php';</script>";
            } else {
            echo "<script>alert('Gagal update data Paket! silakan coba kembali!');location.href='../paket/ubah-paket.php?jenis=".$jenis."';</script>";
            } 
        }
    }
?>