<?php
	require "../auth/auth.php";
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

    <title>booksXchange|dashboard</title>
  </head>
  <body>
   

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3 main-navbar__users">
        <a href="index.php" class="navbar-brand">booksXchange</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item px-3">
              <a href="books.php" class="nav-link">Books</a>
            </li>
            <li class="nav-item px-3">
              <a href="subjects.php" class="nav-link">Subjects</a>
            </li>
            <!-- <li class="nav-item">
              <a href="" class="nav-link"></a>
            </li> -->
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user"></i> Welcome Aziz
              </a>
              <div class="dropdown-menu">
                <a href="profile.php" class="dropdown-item">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <a href="settings.php" class="dropdown-item">
                  <i class="fas fa-cog"></i> Settings
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="fas fa-user-times"></i> Logout
              </a>
            </li>
          </ul>
        </div>
    </nav>
	<a href="addbook.php"><button class="btn btn-info" style="margin:100px">Add New Book</button></a>
    <div id="wrapper">

      <!-- SIDEBAR --> 
        
      <!-- CONTENT --> 
      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>