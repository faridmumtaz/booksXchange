<?php

	require "dbcon/dbcon.php";
	if(isset($_POST["submit"]))
	{
		if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM user WHERE email = '".$_POST["email"]."'")) == 1)
		{
			echo "<span> email already exist </span>";
		}
		else 
		{
			if(mysqli_query($con,"INSERT INTO user VALUES(null,'".$_POST["email"]."',PASSWORD(".$_POST["password"]."),'".$_POST["firstname"]."','".$_POST["lastname"]."',null,'address',null,0)"))
			{
				$resultset = mysqli_query($con,"SELECT * FROM user WHERE email = '".$_POST["email"]."'");
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
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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
                <li class="nav-item">
                    <a href="signup.php" class="nav-link active">
                    <i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
      <br><br>
    
    <!-- LOGIN FORM --> 

    <section id="login" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h3 class="py-4 text-center">Sign Up Form</h3>
                    <form action="" method="post">
                        <div class="fom-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control form-control-lg" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control form-control-lg" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control form-control-lg" name="address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-lg" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg" name="confirm">
                        </div>
                        <input type="submit" value="Sign Up" class="btn btn-primary btn-lg btn-block" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <br><br>
   
    <!-- FOOTER SECTION --> 

    <footer id="main-footer" class="p-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 mx-auto">
                    <p class="lead">
                        Copyright &copy; <span id="year"></span> booksXchange
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        // Get Full Year
        $('#year').text(new Date().getFullYear());

      // Lightbox Init
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
       });
    </script>
  </body>
</html>





