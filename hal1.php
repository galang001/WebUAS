<?php
session_start();
if ($_SESSION['email'] == '') {
    header("location:login.php");
}
?>

Selamat Datang Users <?php echo $_SESSION['email'] ?>

<a href="logout.php">Logout</a>