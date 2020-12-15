<?php
session_start();
if ($_SESSION['email'] == '') {
    header("location:../controller/login.php");
}

include_once("../../config/config.php");

$email = $_SESSION['email'];

if (isset($_POST['update'])) {
    $iduser = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    $result2 = mysqli_query($mysqli, "UPDATE user SET email='$email',phone='$phone',password='$password' WHERE email='$email'");

    echo "<script type='text/javascript'>alert('Berhasil Edit Akun!');location.href=\"akun.php\";</script>";
}
?>
<?php

$email = $_SESSION['email'];

$result2 = mysqli_query($mysqli, "SELECT * FROM user WHERE email='$email'");

while ($user_data2 = mysqli_fetch_array($result2)) {
    $iduser = $user_data2['id'];
    $email = $user_data2['email'];
    $phone = $user_data2['phone'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../../assets/style3.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Akun Setting</title>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/account.png"> </a></img>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../../app/controller/logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text">
        <p></p>
        <p>Setting Akun</p>
        <a class="btn btn-light" href="hal1.php" role="button">KEMBALI</a>
        <P></P>
    </div>

    <form name="update" method="post" action="akun.php">
        <div class="form-group row">
            <label for="staticEmail" class="col-md-6 mb-3 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" name="email" value=<?php echo "$email"; ?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-md-6 mb-3 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value=<?php echo $phone; ?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-md-6 mb-3 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="col-sm-10">
                <p></p>
                <input type="submit" class="btn btn-light" role="button" name="update" value="Update">
            </div>
        </div>
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