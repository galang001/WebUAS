<?php
session_start();
if ($_SESSION['email'] == '') {
    header("location:../app/controller/login.php");
}

include_once("../config/config.php");

if (isset($_POST['update'])) {
    $idtop = $_POST['id_komik'];
    $judul = $_POST['judul_komik'];
    $penerbit = $_POST['penerbit'];
    $date = $_POST['date'];

    $result2 = mysqli_query($mysqli, "UPDATE komik SET judul_komik='$judul',penerbit='$penerbit',date='$date' WHERE id_komik='$idtop'");

    header("Location: ../app/view/haladmin.php");
}
?>
<?php

$idtop = $_GET['id_komik'];

$result2 = mysqli_query($mysqli, "SELECT * FROM komik WHERE id_komik='$idtop'");

while ($user_data2 = mysqli_fetch_array($result2)) {
    $judul = $user_data2['judul_komik'];
    $penerbit = $user_data2['penerbit'];
    $date = $user_data2['date'];
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
        <p></p>
        <p>TOP 5 WEEKLY</p>
        <a class="btn btn-light" href="../app/view/haladmin.php" role="button">KEMBALI</a>
        <P></P>
    </div>

    <form name="update" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul_komik" value=<?php echo "$judul"; ?>></td>
            </tr>
            <tr>
                <td>penerbit</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit; ?>></td>
            </tr>
            <tr>
                <td>date</td>
                <td><input type="text" name="date" value=<?php echo $date; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_komik" value=<?php echo $_GET['id_komik']; ?>></td>
                <td><input type="submit" class="btn btn-light" role="button" name="update" value="Update"></td>
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