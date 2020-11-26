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
   
    <link href="css/style.css" rel="stylesheet">
    <title>booksXchange</title>
  </head>
  <body>
      
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
                    <a href="books.php" class="nav-link active">Books</a>
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
                    <a href="signup.php" class="nav-link">
                    <i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    
    <!-- Section Books -->
    <?php
        include_once "./dbcon/dbcon.php";
        $books = mysqli_query($con, "SELECT * FROM book");

    ?>
    <section id="books" class="py-4 mt-4">
        <div class="container p-3">
             <h1 class="text-center mt-3">All Books Are Here</h1>
             <hr>
             <div class="card-columns">
                 <?php while ($book = mysqli_fetch_assoc($books)) { ?>

                    <div class="card">
                        <img src="<?php echo $book['photo']; ?>" alt="book photo" class="card-img-top img-fluid">
                        <div class="card-body text-center">
                            <h6 class="card-title font-weight-bold"><?php echo "<b>".$book["book_name"]; ?></h6>
                            <h6 class="text-muted p-1"><?php echo $book["author"]; ?></h6>
                        </div>
                    </div>

                 <?php } ?>
             </div>
        </div>
    </section>

    
    <!-- FOOTER SECTION --> 

    <footer id="main-footer" class="py-4">
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
    <script>
        // Get Full Year
        $('#year').text(new Date().getFullYear());

    </script>
  </body>
</html>


