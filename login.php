<?php
include "functions/database.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $admin = $conn->prepare('
    SELECT * FROM pelanggan 
    WHERE email = :email and password = :password');
  $admin->execute(
    array(  ':email' => $_POST['email'],
            'password' => md5($_POST['password'])
          ));
  
  $row = $admin->fetch(PDO::FETCH_ASSOC);
   
  if (empty($row['email'])) {
    echo "Your Login Name or Password is invalid";
  } else {
    $_SESSION['login_user'] = $_POST['email'];
    header("location: index.php");
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      body, html {
        height: 100%;
        background-color: #D9F2FA;
      }
      .card {
        border-radius: 10px;
      }
      .card-header {
        background-color: rgb(0,0,0,0);
        color: #054D7F;
      }
    </style>
    <title>Login</title>
  </head>
  <body>
    <div class="container h-100">
      <div class="row justify-content-md-center align-items-center h-100">
        <div class="col col-md-5 card">
          <div class="card-header">
            <h3 class="font-weight-bold card-title">Login</h3>
          </div>
          <div class="card-body">
            <form action="login.php" method="POST">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="email" name="email" id="email">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" placeholder="password" name="password" id="password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>