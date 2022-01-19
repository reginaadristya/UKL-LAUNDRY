<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $tlp=$_POST['tlp'];

        if(empty($nama || $alamat || $jenis_kelamin || $tlp)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='../member/ubah-member.php?nama=$nama'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update member set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tlp='$tlp' where nama='$nama'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data Member!');location.href='../member/tampil-member.php';</script>";
            } else {
            echo "<script>alert('Gagal update data Member! silakan coba kembali!');location.href='../member/ubah-member.php?nama=".$nama."';</script>";
            } 
        }
    }
?>