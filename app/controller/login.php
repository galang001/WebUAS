<?php
include_once('../../config/config.php');

$email = $_POST['email'];
$pass = md5($_POST['password']);

$user = mysqli_query($mysqli, "select * from user where email='$email' and password='$pass'");
$admin = mysqli_query($mysqli, "select * from admin where email='$email' and password='$pass'");
$cek = mysqli_num_rows($user);
$cekadmin = mysqli_num_rows($admin);

if ($cekadmin > 0) {
    session_start();
    $logout = mysqli_fetch_array($admin);
    $_SESSION['email'] = $logout['email'];
    header("location:../view/haladmin.php");
} else if ($cek > 0) {
    session_start();
    $logout1 = mysqli_fetch_array($user);
    $_SESSION['email'] = $logout1['email'];
    header("location:../view/hal1.php");
} else {
    echo "<script type='text/javascript'>alert('Email atau Password Salah!');location.href=\"../../index.php\";</script>";
}
