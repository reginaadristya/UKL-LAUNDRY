<?php
    if($_GET['cabang']){
    include "../koneksi.php";
    $qry_hapus = mysqli_query($conn,"delete from outlet where cabang='".$_GET['cabang']."'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data');location.href='tampil_outlet.php';</script>";
    } else {
    echo "<script>alert('Gagal hapus data');location.href='./tampil_outlet.php';</script>";
    }
  }
?>