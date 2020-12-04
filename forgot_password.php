<?php
    session_start();
    require "dbcon/dbcon.php";
    if (isset($_POST["submit"])) {
        $resultset = mysqli_query($con, "SELECT * FROM user WHERE email = '".$_POST["email"]."' AND password = PASSWORD(".$_POST["password"].")");
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
                <a href="index.php" class="navbar-brand">booksXchange</a>
                
            </div>
        </nav>
      <br><br>
    
      
    
    <!-- LOGIN FORM --> 

    <section id="contact__about" class="p-4 mt-5">
    
      <div class="container" style="display:flex; flex-direction: column; justify-content:center; align-items:  center; border-radius: 7px; width:400px; border: 1px   solid #ddd;">
        <h5 class="p-2 font-weight-bold mt-4">Find Your Account</h5>
        <hr>
        <p class="text-muted">An email will be send to you with instructions on how to reset your password.</p>
            <div class="row">
                <div class="col">
                    <form class="justify-content-center">
                        
                        <input type="email" class="form-control mb-2 mr-2" placeholder="Enter Email">
                        <button type="submit" name="forgotPassword" class="btn btn-dark btn-block text-uppercase mb-2">Receive New Password By Email</button>
                    </form>
                    <div class="row">
                        <div class="col"><hr></div>
                        <div class="col-auto">OR</div>
                        <div class="col"><hr></div>
                    </div>
                    <div class="text-center mb-5">
                        <a href="signup.php" class="text-success">Create New Account</a>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>

   



