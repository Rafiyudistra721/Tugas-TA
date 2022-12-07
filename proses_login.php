<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tb_pengguna WHERE username = '$username'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

if ($passmd == $data['password']) {
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];

    echo "<h2> Login Sukses </h2>";
    header('location:admin.php');
}else{
    echo "<h2>Login Gagal</h2>";
}
?>