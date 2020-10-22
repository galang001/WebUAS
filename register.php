<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" type="text/css" href="assets/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Latihan 4</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-none">
    <a class="navbar-brand" href="index.php">DIXIE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    </button>
  </nav>
  <div class="signup2">
    <div class="signup">
      <h2>Sign UP</h2>
      <form action="register.php" method="POST" name="form1">
        <p>Email</p>
        <input type="email" name="email" placeholder="" />
        <p>Phone Number</p>
        <input type="text" name="phone" placeholder="" />
        <p>Password</p>
        <input type="password" name="password" placeholder="" />
        <p>Re-type Password</p>
        <input type="password" name="ulangpassword" placeholder="" />
        <p style="font-weight: 400">
          by signing up you have read and agree to the terms of the DIXIE
          Customer Agreement
        </p>
        <input type="submit" name="Submit" value="Sign Up" />
      </form>
    </div>
  </div>

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
  <?php
  include_once("config.php");
  // Check If form submitted, insert form data into users table.
  if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $ulangpass = $_POST['ulangpassword'];

    // include database connection file


    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO user(email,phone,password) VALUES('$email','$phone','$password')");
    $stmt = $mysqli->prepare($result);
    if (!$result) {
      printf("Error: %s\n", mysqli_error($mysqli));
      exit();
    }
  }
  ?>
</body>

</html>