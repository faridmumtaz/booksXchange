
<?php
    require "../auth/auth.php";
    require "../dbcon/dbcon.php";
?>

   
  <?php include_once 'header.php';
  include_once "./sidebar.php";
  
    $resultset = mysqli_query($con, "SELECT * FROM book");
  
  ?>
        
      <!-- CONTENT --> 
      <br><br>
      <div class="col-md-10 mt-5">
        <div class="container" style="float:center">
          <h1 class="text-center">Most Popular Books</h1>
          <hr>
            <div class="row">
              <?php
                while ($result = mysqli_fetch_assoc($resultset)) {
                    ?>
                <div class="col-md-4 mx-auto">
                  <div class="card-group">
                    <img src="<?php echo $result['photo']; ?>" alt="" class="card-img-top" style="width: 300px; height: 400px;">
                    <div class="card-body text-center">
                      <h6 class="card-title font-weight-bold"><?php echo $result['book_name']; ?></h6>
                      <h6 class="text-muted"><?php echo $result['author']; ?></h6>
                      
                      <button class="btn btn-danger btn-block mt-3">Get It</button>
                    </div>
                  </div>
                </div>
                
                <?php
                } ?>
                
            </div>
        </div>
      </div>

    <?php include_once 'footer.php'; ?>
