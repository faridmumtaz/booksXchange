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
                  <a href="books.php" class="nav-link">Books</a>
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
      </header>
      <!-- SHOWCASE SECTION -->
      <section id="showcase" style="margin-top: -2rem">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center">
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
                <h3>Share your knowledge</h3>
                <p class="lead">Don't let your precious wisdom sleeps in your bookshelf. Let the knowledge spreads out!</p>
            </div>
            
            <div class="col-md-4 mb-4 text-center">
                <i class="fas fa-graduation-cap fa-3x"></i>
                <h3>Make a Profit</h3>
                <p class="lead">Yes you deserve! We value your shares.Simple sharing and make a profit</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <i class="fas fa-dollar-sign fa-3x"></i>
                <h3>Save Money</h3>
                <p class="lead">Read once and left it in your bookshelf forever? Stop wasting and just borrow from your neighbors with bookXchange</p>
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
                <p class="d-none d-md-block">We are ready to deliver your books in one day!</p>
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
                <p>Are you still wondering what exactly we offer? </p>
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
                <a href="login.php" class="mt-3 btn btn-outline-primary btn-lg btn-block">Subscript Now</a>
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
                        <a href="#Question1" data-toggle="collapse" data-parent="#accordion">Q. What is Subscription?</a>
                      </h5>
                    </div>
                    <div id="Question1" class="collapse">
                      <div class="card-body">
                      you will pay just $9 monthly for Unlimited Sharing and borrowing. You can cancel any time through contact us Section. 
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
                        <a href="#Question2" data-toggle="collapse" data-parent="#accordion">Q. How can I make a profit by sharing my books?</a>
                      </h5>
                    </div>
                    <div id="Question2" class="collapse">
                      <div class="card-body">
                      Your registered Books will be delievered to another bookXchanger when they apply. Our delievery guy will come to your door step at your convinient time.
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
                        <a href="#Question3" data-toggle="collapse" data-parent="#accordion">Q. What if I damage or lost borrowed books?</a>
                    </h5>
                  </div>
                  <div id="Question3" class="collapse">
                    <div class="card-body">
                    Unfortunetly, if the book is lost or damaged you have to pay that amount. The book value is set according to preowned market price.
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
                      <a href="#Question4" data-toggle="collapse" data-parent="#accordion">Q. How do I extend the book borrowing period? </a>
                    </h5>
                  </div>
                  <div id="Question4" class="collapse">
                    <div class="card-body">
                    You can apply for extension 2days before the end of the borrowing period.
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
                    <a href="#Question5" data-toggle="collapse" data-parent="#accordion">Q. How long should I keep the book which I borrowed?</a>
                  </h5>
                </div>
                <div id="Question5" class="collapse">
                  <div class="card-body">
                  You can apply for returning book anytime. Auto apply for returning after 30days.
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
                      <a href="#Question6" data-toggle="collapse" data-parent="#accordion">Q. I want to cancel my subscription. What about my books shared?</a>
                    </h5>
                  </div>
                  <div id="Question6" class="collapse">
                    <div class="card-body">
                    If you subscription cancellation is confirmed. All your books will return to you after the last borrower's borrowing days over.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- GET IN TOUCH SECTION --> 
    <section id="getintouch" class="p-4">
    <h3 class="text-center">Get In Touch</h3>
      <div class="container p-3" style="background: #97cad2; border-radius:7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.4)">
        <div class="row">
          <div class="col-md-4">
            <div class="bg-white p-3 mt-3 rounded">
              <div class="">
                <h4>Get In Touch</h4>
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
                <div>
                  <h3 class="text-center mb-3">Leave a Message</h3>
                  <form>
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

    


