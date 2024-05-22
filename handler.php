<?php 
session_start();

$koneksi = new mysqli('localhost','root','','uh_ddg'); 
if (!$koneksi) {
   echo 'Tidak bisa melakukan koneksi'; 
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$aksi = $_POST['aksi'];

if ($aksi === 'login') {
    $sql = "SELECT * FROM user WHERE `email` = '$email' && `password` = '$password'";
    $login = $koneksi->query($sql);
    if($login) {
        $_SESSION['data'] = $login->fetch_assoc();
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php");
        exit();
    }
} elseif($aksi === 'register') {
    $sql = "INSERT INTO user(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    $login = $koneksi->query($sql);
    if($login) {
        header("Location: login.php");
        exit();
    } else {
        header("Location: register.php");
        exit();
    }
} elseif($aksi === 'logout') {
    header('Location: logout.php');
}
?>