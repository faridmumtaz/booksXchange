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
      <header id="main-header">
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
                    <a href="index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item mr-5">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">
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
      </header>
      <!-- SHOWCASE SECTION -->
      <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="color: #000; font-size: 32px;">
                    <h1 class="display-3">Lorem Ipsum</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem vitae ducimus dolores ullam deserunt est laudantium tempora adipisci. Ex, nihil!</p>
                    <a href="#ReadMore" class="btn bg-primary btn-lg text-white">
                       Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- HOME ICONS SECTION -->
      <section id="home-icons" class="py-5 text-center bg-light">
        <div class="container">
        <h1 class="text-center mb-4">Our Goals</h1>
        <hr>
          <div class="row py-3">
            <div class="col-md-4 mb-4 text-center">
                <i class="fas fa-hands-helping fa-3x"></i> 
                <h3>Help Together</h3>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, qui!</p>
            </div>
            
            <div class="col-md-4 mb-4 text-center">
                <i class="fas fa-graduation-cap fa-3x"></i>
                <h3>Improve Knowledge</h3>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, labore?</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <i class="fas fa-dollar-sign fa-3x"></i>
                <h3>Save Money</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, soluta!</p>
            </div>
          </div>
        </div>
      </section>

      <!-- LOOKING BOOK SECTION --> 
      <section id="lookingbook" class="p-4">
        <div class="dark-overlay">
          <div class="row">
            <div class="col">
              <div class="container pt-4">
                <h1>Are You Looking For A Book?</h1>
                <p class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, fugiat.</p>
              </div>
            </div>
          </div>
        </div>
      </section>  
      <!-- INFO SECTION -->
      <section id="info" class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <h3>booksXchange</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nobis aliquid ducimus a. Mollitia veritatis itaque error aliquid vitae beatae quas corrupti quidem fugiat,</p>
                <a href="about.php" class="btn btn-outline-primary btn-lg">Learn More</a>
              </div>
              <div class="col-md-6">
                <img src="img/book_image3.jpg" alt="" class="img-fluid" style="border-radius: 7px;">
              </div>
            </div>
          </div>
          
      </section>
     
      <!-- BEST BOOKS -->
      <section id="books" class="p-4 mb-4 bg-light">
        <div class="container">
          <hr>
          <h1 class="text-center">Our Best Books</h1>
          <p class="text-center">See Some Of These Books</p>
          <div class="row mb-4">
            <div class="col-md-4">
              <!-- Put our images path here --> 
                <a href="img/book_image1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560" >
                  <img src="img/book_image1.jpg" alt="" class="img-fluid">
                  
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/book_image2.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="559" data-width="559">
                  <img src="img/book_image2.jpg" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/book_image3.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="558" data-width="558">
                  <img src="img/book_image3.jpg" alt="" class="img-fluid">
                </a>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-4">
                <a href="img/book_image1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="563" data-width="563">
                    <img src="img/book_image1.jpg" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/book_image2.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-width="564" data-height="564">
                    <img src="img/book_image2.jpg" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/book_image3.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-width="565" data-height="565">
                    <img src="img/book_image3.jpg" alt="" class="img-fluid">
                </a>
            </div>
          </div>
        </div>
      </section>

      <!-- SUBSCRIPTION  -->
      <section id="subscription" class="py-4">
        <div class="container">
          <h1 class="text-center text-uppercase text-primary">Subscription</h1>
          <div class="row mb-4">
            <div class="col">
                <h2 class="border-bottom d-flex py-2">Monthly Price <span class="text-danger ml-auto">$99</span></h2>
                <h2 class="border-bottom py-2">Unlimited Book Landing</h2>
                <h2 class="border-bottom py-2">Unlimited Book Share</h2>
                <h2 class="border-bottom py-2">Cancel Any Time</h2>
                <a href="login.php" class="mt-3 btn btn-outline-primary btn-lg btn-block">Continue</a>
            </div>
          </div>
        </div>
      </section> 


    <!-- COMMENT SECTION --> 
    
    <!-- FAQ SECTION --> 
    <section id="faq" class="bg-light py-4">
      <div class="container">
      <h1 class="display-3 text-center">FAQ</h1>
        <div class="row mb-4">
            <div class="col-md-4">
                <!-- ACCORDION --> 
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <h5>
                        <a href="#Question1" data-toggle="collapse" data-parent="#accordion">Question One ... Lorem ipsum dolor sit.</a>
                      </h5>
                    </div>
                    <div id="Question1" class="collapse">
                      <div class="card-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit ullam cupiditate perferendis aliquam aspernatur?
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- ACCORDION --> 
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <h5>
                        <a href="#Question2" data-toggle="collapse" data-parent="#accordion">Question Two ... Lorem ipsum dolor sit.</a>
                      </h5>
                    </div>
                    <div id="Question2" class="collapse">
                      <div class="card-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit ullam cupiditate perferendis aliquam aspernatur?
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
              <div id="accordion">
                <div class="card">
                  <div class="card-header">
                    <h5>
                        <a href="#Question3" data-toggle="collapse" data-parent="#accordion">Question Three ... Lorem ipsum dolor sit.</a>
                    </h5>
                  </div>
                  <div id="Question3" class="collapse">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit ullam cupiditate perferendis aliquam aspernatur?
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-4">
              <div id="accordion">
                <div class="card">
                  <div class="card-header">
                    <h5>
                      <a href="#Question4" data-toggle="collapse" data-parent="#accordion">Question Four ... Lorem ipsum dolor sit.</a>
                    </h5>
                  </div>
                  <div id="Question4" class="collapse">
                    <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit ullam cupiditate perferendis aliquam aspernatur?
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <h5>
                    <a href="#Question5" data-toggle="collapse" data-parent="#accordion">Question Five ... Lorem ipsum dolor sit.</a>
                  </h5>
                </div>
                <div id="Question5" class="collapse">
                  <div class="card-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fugit ullam cupiditate perferendis aliquam aspernatur?
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="col-md-4">
              <div id="accordion">
                <div class="card">
                  <div class="card-header">
                    <h5>
                      <a href="#Question6" data-toggle="collapse" data-parent="#accordion">Question Six ... Lorem ipsum dolor sit.</a>
                    </h5>
                  </div>
                  <div id="Question6" class="collapse">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, iusto!
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- GET IN TOUCH SECTION --> 
    <section id="getintouch" class="py-4">
    <h3 class="text-center">Get In Touch</h3>
      <div class="container p-3" style="background: #97cad2; border-radius:7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.4)">
        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <div class="card-body">
                <h4>Get In Touch</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
              <div class="card p-4">
                <div class="card-body">
                  <h3 class="text-center mb-4">Leave a Message</h3>
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


