<?php
include_once("../config/config.php");

$idtop = $_GET['id_komik'];

$result2 = mysqli_query($mysqli, "DELETE FROM komik WHERE id_komik=$idtop");

header("Location:../app/view/haladmin.php");
?>

<?php
include_once("../config/config.php");

$id_isikomik = $_GET['id_isikomik'];

$result2 = mysqli_query($mysqli, "DELETE FROM isikomik WHERE id_isikomik=$id_isikomik");

header("Location:../app/view/haladmin.php");
