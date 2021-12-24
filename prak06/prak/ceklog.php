<?php
session_start();
include('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_md5 = md5($_POST['password']);

    $data = mysqli_query($conn, "SELECT * FROM daftar where username='$username' AND password = '$password_md5'");

    $cek = mysqli_num_rows($data);
    
    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:dashboard.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>