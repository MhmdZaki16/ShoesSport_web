<?php
require('function.php');

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $upassword = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM `tbl_user` WHERE username = '$username'");

  list($id, $username, $email, $password) = mysqli_fetch_array($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $data;
    if (password_verify($upassword, $password)) {
      session_start();
      $_SESSION['username'] = $username;
      header("location: index.php");
      die();
    } else {
      echo "<script>
              alert('username atau password anda salah, silahkan login kembali')
              </script>";
    }

    //Kondisi ketika form dengan name!=admin

  }

  $error = true;
}

?>



<!Doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="login-form-02/fonts/icomoon/style.css">

  <link rel="stylesheet" href="login-form-02/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="login-form-02/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="login-form-02/css/style.css">

  <title>Login</title>
  
  <style>
        label {
            display: block;
        }
    </style>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('login-form-02/images/bg_1.jfif');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <center>
              <h3><strong>Masuk</strong></h3>
            </center>

            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password">
                </div>


                <button type="submit" name="login">Login</button>
              </div>
          </div>
        </div>
      </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>