<?php
require('koneksi.php');

function registrasi($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];
    $password_sha1 = sha1($password);
    $email = $data["email"];
    $nama = $data["nama"];

    //cek username sudah ada atau belom
    $result = mysqli_query($conn, "SELECT username FROM daftar WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO daftar VALUES ('', '$username', '$password_sha1', '$email', '$nama')");

    return mysqli_affected_rows($conn);

    echo "<script>
        alert('user baru berhasil ditambahkan');
        document.location.href = 'login.php';
        </script>";
}
?>