<?php
session_start();
if ($_SESSION['email'] == '') {
    header("location:../controller/login.php");
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

    <title>Halaman 1</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="hal1.php  ">DIXIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="hal1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav col-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/account.png"> </a></img>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="akun.php">Setting Akun</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../controller/logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="text">
        <p></p>
        <p>NEW RELEASE</p>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../assets/img3.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>BATMAN #92</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 center" src="../../assets/img2.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>ATLA : THE SEARCH 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../assets/img4.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <p>ATLA : THE SEARCH 3</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="text">
        <p></p>
        <p>TOP WEEKLY</p>
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
            echo "</tr>";
        }
        ?>
    </table>
    <div class="text">

        <p>COMIC LIST</p>
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
        echo "<a href='\' class='btn btn-warning'>Baca</a>&nbsp";
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