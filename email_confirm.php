<?php
    session_start();
    require "dbcon/dbcon.php";
    if (isset($_POST["submit"])) {
        if ($_POST["otp"] == $_SESSION["otp"]) {
            $enc_pass = md5($_SESSION["password"]);
            if (mysqli_query($con, "INSERT INTO user VALUES(null,'".$_SESSION["email"]."','$enc_pass','".$_SESSION["firstname"]."','".$_SESSION["lastname"]."',null,'".$_SESSION["address"]."','profile_photo.jpg',0)")) {
                $resultset = mysqli_query($con, "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'");
                $c = mysqli_fetch_assoc($resultset);
                mkdir("user/".$c["user_id"]);
                echo "<script> alert('You have registered succesfully!');

						window.location.href = 'index.php?success=reg';
					</script>";
            } else {
                echo "<script> alert('Registration failed. Please try later'); 
						window.location.href = 'index.php?fail=reg';
				</script>";
            }
        } else {
            echo "<script> alert('An error occurred\nPlease try later');</script>";
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
                
            </div>
        </nav>
      <br><br>
    
      
    
    

    <section id="contact__about" class="p-4 mt-5">
    
    
	   
	<div class="d-flex flex-column justify-content-center align-items-center" style="height: 50vh">
		<p class="font-weight-bold">You will recieve an OTP in your email shortly. Please type it here:</p>
		<form method="post" class="form-inline">
		<br><input type="text" name="otp" class="form-control mr-2" placeholder="Enter OTP">
		<input type="submit" name="submit" class="btn btn-outline-dark">
		</form>
	</div>
        
    </section>