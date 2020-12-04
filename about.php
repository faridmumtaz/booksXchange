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
                    <a href="about.php" class="nav-link active">About</a>
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
      <br><br>
    
    <!-- ABOUT SECTION --> 
    <section id="about" class="p-4">
    <div class="container" style="background: #dcdcdc; border-radius: 7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.4)">
      <div class="row mt-4">
        <div class="col-md-8">
          <h3 class="py-4">Books Exchange System</h3>
          <p>Our goal is to ensure that all the books in the world are not just adorning bookshelves,</p>
          <p>but are used to spread knowledge widely to people for their original purpose.</p>
          <p>Books are our friends and knowledge partners.</p>
          <p>bookXchange provides you a new platform to share your wisdom.</p>
        </div>
        <div class="col-md-4 align-self-center">
          <img src="img/book_image1.jpg" alt="" class="img-fluid book-exchange__about">
        </div>
      </div>
    </div>
    </section>

    <!-- CONTACT SECTION --> 
    <section id="contact__about" class="p-4">
    
      <div class="container p-3" style="background: #97cad2; border-radius: 7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.5)">
        <div class="row">
          <div class="col-md-4">
            <div class="bg-white p-3 mt-3 rounded">
              <div class="">
                <h4>Reach Us</h4>
                <p>We values your words.</p>
                <h4>Address</h4>
                <p>Pune, Maharashtra, India</p>
                <h4>Email</h4>
                <p>booksXchanges@gmail.com</p>
                <h4>Phone</h4>
                <p>(+91) 899 999 990 0</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
              <div class="p-4">
                <div class="">
                  <h3 class="text-center mb-3">Leave a Message</h3>
                  <form action="">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                              <i class="fas fa-user"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control bg-dark text-white" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-envelope"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control bg-dark text-white" placeholder="Email">
                      </div>
                    </div>
                    <div class="fom-group">
                      <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-pencil-alt"></i>
                          </span>
                        </div>
                        <textarea class="form-control bg-dark text-white" placeholder="Message"></textarea>
                      </div>
                      <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg mt-3">
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    
     <!-- footer -->
     <?php include_once "./footer.php" ?>

    


