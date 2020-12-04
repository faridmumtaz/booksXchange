<?php
    session_start();
    require "phpmailer/email.php";
    require "dbcon/dbcon.php";
    $otp = rand(100000, 999999);
    if (isset($_POST["submit"])) {
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["address"] = $_POST["address"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["otp"] = $otp;
        $email = $_POST["email"];
        
        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email = '".$_POST["email"]."'")) == 1) { // checking whether email is already registered
            echo "<script type='text/javascript'>alert('Email ID already exist!');</script>";
        } elseif (send_mail($otp, $email)) {//sending otp in email
            echo "<script type='text/javascript'>location.href = 'email_confirm.php'; </script>";
        } else {
            echo "<script type='text/javascript'>alert('An error occured\nTry later!');</script>";
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
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                    <i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                <li class="nav-item bg-success rounded">
                    <a href="signup.php" class="nav-link active">
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
                    <h3 class="py-4 text-center">Sign Up Form</h3>
                    <form action="" method="post">
                        <div class="fom-group">
                            <label for="firstname">First name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-lg" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-lg" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label> <span class="text-danger">*</span>
                            <input type="email" class="form-control form-control-lg" name="email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-lg" name="address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label> <span class="text-danger">*</span>
                            <input type="password" class="form-control form-control-lg" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label> <span class="text-danger">*</span>
                            <input type="password" class="form-control form-control-lg" name="confirm">
                        </div>
                        <input type="submit" value="Sign Up" class="btn btn-success btn-lg btn-block mb-3" name="submit" >
                        
                    </form>
                    <div class="text-center mb-3">
                        Already have account? <a href="login.php">Login</a>        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
     <!-- footer -->
     <?php include_once "./footer.php" ?>






