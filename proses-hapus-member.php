<?php
    if($_GET['nama']){
    include "../koneksi.php";
    $qry_hapus = mysqli_query($conn,"delete from member where nama='".$_GET['nama']."'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data');location.href='tampil-member.php';</script>";
    } else {
    echo "<script>alert('Gagal hapus data');location.href='./tampil-member.php';</script>";
    }
  }
?>