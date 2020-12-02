<!-- Container --> 
<?php
 
  require "../dbcon/dbcon.php";

  $resultset = mysqli_query($con, "SELECT * FROM user WHERE user_id =".$_SESSION['user_login']);
  $result = mysqli_fetch_assoc($resultset);


?>
<div class="container-fluid">
        <div class="row">
          <div class="col-md-2 bg-light d-md-block">
            <div class="mt-4">
              <div class="text-center">
                  <img src="<?php echo $result['profile_photo']; ?>" class="" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover;">
              </div>
              <h4 class="text-center mt-2"><?php echo $result['firstname']. "<br>". $result['lastname']; ?></h4>
              <ul class="nav flex-column sidebar-nav smooth-scroll">
                <li class="nat-item mt-2">
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
                      <i class="fas fa-cog"></i> Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./logout.php">
                    <i class="fas fa-user-times"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>