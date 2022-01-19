<?php
    if($_POST){
        $cabang=$_POST['cabang'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];


        if(empty($cabang || $alamat || $telp )) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../outlet/ubah-outlet.php?cabang=$cabang'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update outlet set cabang='$cabang', alamat='$alamat', telp='$telp' where cabang='$cabang'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data Outlet!');location.href='../outlet/tampil_outlet.php';</script>";
            } else {
            echo "<script>alert('Gagal update data Member! silakan coba kembali!');location.href='../outlet/ubah-outlet.php?cabang=".$cabang."';</script>";
            } 
        }
    }
?>