<?php
error_reporting(0);
session_start();
if ($_SESSION['email'] == "admin") {
} else {
    echo "<script type='text/javascript'>alert('Anda Bukan Admin!');location.href=\"hal1.php\";</script>";
}

// Create database connection using config file
include_once("../../config/config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM komik ORDER BY id_komik ASC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../../assets/style2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>ADMIN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="hal1.php  ">DIXIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav col-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/account.png"> </a></img>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../controller/logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text">

        <p>TOP 5 WEEKLY</p>
        <P></P>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tanggal Rilis</th>
            </tr>
        </thead>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id_komik'] . "</td>";
            echo "<td>" . $user_data['judul_komik'] . "</td>";
            echo "<td>" . $user_data['penerbit'] . "</td>";
            echo "<td>" . $user_data['date'] . "</td>";
            echo "<td><a href='../../media/edit.php?id_komik=$user_data[id_komik]'>Edit</a> | ";
            echo "</tr>";
        }
        ?>
    </table>
    <div class="text">

        <p>COMIC LIST</p>
        <a class="btn btn-light" href="../../media/add.php" role="button">TAMBAH DATA</a>
        <P></P>
    </div>
    <?php
    $result2 = mysqli_query($mysqli, "SELECT * FROM isikomik ORDER BY id_isikomik ASC");
    while ($row = mysqli_fetch_array($result2)) {
        echo "<div class='card'>";
        echo "<h4 class='card-header'>" . $row['Judul'] . "</h4>";
        echo "<div class='card-body'>";
        echo "<div id='img'>";
        echo "<img src='../../assets/" . $row['foto'] . "'width=250'></img>";
        echo "<h5 class='card-text'>Sinopsis</h5>";
        echo "<p class='card-text'>" . $row['comment'] . "</p>";
        echo "<h6 class='card-text'>Tanggal Rilis : " . $row['tanggal'] . "</h6>";
        echo "<a href='../../media/edit2.php?id_isikomik=$row[id_isikomik]' class='btn btn-warning'>EDIT</a>&nbsp";
        echo "<a href='../../media/delete.php?id_isikomik=$row[id_isikomik]' class='btn btn-warning'>DELETE</a>";
        echo " </div>";
        echo "</div>";
        echo "</div>";
        echo "<p></p>";
    }
    ?>

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