<?php
    if($_GET['jenis']){
    include "../koneksi.php";
    $qry_hapus = mysqli_query($conn,"delete from paket where jenis='".$_GET['jenis']."'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data');location.href='tampil-paket.php';</script>";
    } else {
    echo "<script>alert('Gagal hapus data');location.href='./tampil-paket.php';</script>";
    }
  }
?>