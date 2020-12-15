<?php
session_start();
if ($_SESSION['email'] == '') {
    header("location:../app/controller/login.php");
}

include_once("../config/config.php");

if (isset($_POST['tambah'])) {
    $target = "../assets/" . basename($_FILES['foto']['name']);
    $id_isikomik = $_POST['id_isikomik'];
    $judul = $_POST['judul'];
    $foto = $_FILES['foto']['name'];
    $comment = $_POST['comment'];
    $tanggal = $_POST['tanggal'];
    $result2 = mysqli_query($mysqli, "INSERT INTO isikomik (judul,foto,comment,tanggal) VALUES('$judul','$foto','$comment','$tanggal')");

    $gantinama = uniqid();
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $msg = "Image Uploaded";
    } else {
        $msg = "image gagal";
    }

    echo "<script type='text/javascript'>alert('Data Berhasil Ditambah!');location.href=\"../app/view/haladmin.php\";</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../assets/style2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>ADMIN EDIT</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="">DIXIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav col-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/account.png"> </a></img>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../app/controller/logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text">
        <p>COMIC LIST</p>
        <a class="btn btn-light" href="../app/view/haladmin.php" role="button">KEMBALI</a>
        <P></P>
    </div>

    <form name="tambah" method="post" enctype="multipart/form-data" action="add.php">
        <table border="0">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value=></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" value=></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><textarea name="comment" cols="40" rows='4' value=></textarea></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="text" name="tanggal" value=></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_isikomik" value=></td>
                <td><input type="submit" class="btn btn-light" role="button" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>


    <div class="footer">
        <blockquote class="blockquote mb-0">
            <p>
                2020 Galang Wijaya Dewan Putra
            </p>
        </blockquote>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>