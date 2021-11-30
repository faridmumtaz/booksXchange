<?php
    session_start();
    require "dbcon/dbcon.php";
    if (isset($_POST["submit"])) {
        $enc_pass = md5($_POST["password"]);
        $resultset = mysqli_query($con, "SELECT * FROM user WHERE email = '".$_POST["email"]."' AND password = '$enc_pass'");
        if (mysqli_num_rows($resultset) == 1) {
            $record = mysqli_fetch_assoc($resultset);
            $_SESSION["user_login"] = $record["user_id"];
            header("location:user/index.php");
        } else {
            echo "<span> incorrect username or password </span>";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>booksXchange</title>
  </head>
  <body>
      <!-- HEADER SECTION --> 
      
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top py-3 main-navbar" id="main-navbar">
            <div class="container">
            <a href="index.php">
                <img src="img/logo.jpg" alt="Logo" style="width: 120px; height: 50px;">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-4" id="navbarNav">
                <form action="" class="form-inline">
                <input type="text" class="form-control mr-2" placeholder="Search Books">
                <input type="submit" value="Search Books" class="btn btn-outline-light">
                </form>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item mr-5">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item bg-primary rounded">
                    <a href="login.php" class="nav-link active">
                    <i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">
                    <i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
      <br><br>
    
    <!-- LOGIN FORM --> 

    <section id="login" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h3 class="py-4 text-center">Login Form</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg mb-3" name="email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password" data-error="wrong" data-success="right">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg mb-3" name="password" autocomplete="off">
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block" name="submit">
                        <div class="text-center m-4">
                            <a href="forgot_password.php" class="blue-text ml-1">Forgot Password?</a>
                        </div>
                        <div class="text-center mb-3">
                            <a href="signup.php" class="btn btn-success">Create New Account</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <br>
   
    <!-- footer -->
    <?php include_once "./footer.php" ?>

   



