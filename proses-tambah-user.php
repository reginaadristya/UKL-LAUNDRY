<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];

        if(empty($nama || $username || $password || $role)) {
            echo "<script>alert('Harap semua data diisi dengan benar!');location.href='../tambah-user.php';</script>";
        } else {
            include ("../koneksi.php");
            $insert=mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')");
            
            if($insert){
                echo "<script>alert('Sukses menambahkan User!');location.href='../login.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan User! silakan coba kembali!');location.href='../tambah-user.php';</script>";
            }
        }
    }
?>