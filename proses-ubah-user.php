<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];

        if(empty($nama || $username || $password || $role)) {
            echo "<script>alert('Harap semua data harus diisi!');location.href='ubah-user.php?nama=$nama'</script>";
            } else {
            include ("../koneksi.php");
            $query = "update user set nama='$nama', username='$username', password='".md5($password)."', role='$role' where nama='$nama'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update data User!');location.href='tampil-user.php';</script>";
            } else {
            echo "<script>alert('Gagal update data User! silakan coba kembali!');location.href='ubah-User.php?nama=".$nama."';</script>";
            } 
        }
    }
?>