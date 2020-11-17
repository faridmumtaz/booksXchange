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
    <link href="../css/user-style.css" rel="stylesheet">
    <title>booksXchange|dashboard</title>
    
  </head>
  <body>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-3 shadow" id="main-navbar">
     <a href="#" class="navbar-brand">booksXchange</a>
     <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <form method="post" class="form-inline m-auto">
            <input type="text" name="search" placeholder="Search..." class="form-control form-control-primary mr-2">
            <input type="submit" name="search" value="Search" class="btn btn-outline-light mr-2">
         </form>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item text-nowrap">
              <a href="./logout.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout</a>
            </li>
         </ul>
      </div>
     
    </nav>
  
    <!-- Container --> 
    <div class="container" style="position: relative">
        <div class="row">
          <div class="col-md-2 bg-light d-md-block sidebar">
            <div class="left-sidebar mt-4">
              <div class="text-center">
                  <img src="../img/goal.jpg" class="" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover;">
              </div>
              <h4 class="text-center mt-2">Aziz Mohammadi</h4>
              <ul class="nav flex-column sidebar-nav">
                <li class="nat-item mt-2" style="background-color: #ccc">
                  <a href="addbook.php" class="nav-link">
                    <i class="fas fa-plus-square"></i> Add Book
                  </a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link active" href="profile.php">
                      <i class="fas fa-user-circle"></i> Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="fas fa-book"></i> Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="fas fa-folder"></i> Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="fas fa-cog"></i> Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="fas fa-user-times"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>