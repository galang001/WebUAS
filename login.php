<?php
include_once('config.php');

$email = $_POST['email'];
$pass = $_POST['password'];

$user = mysqli_query($mysqli, "select * from user where email='$email' and password='$pass'");
$cek = mysqli_num_rows($user);

if ($cek > 0) {
    session_start();
    $logout = mysqli_fetch_array($user);
    $_SESSION['email'] = $logout['email'];
    header("location:hal1.php");
} else {
    echo "<script type='text/javascript'>alert('Email atau Password Salah!');location.href=\"index.php\";</script>";
}
