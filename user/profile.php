<?php
    require "../auth/auth.php";
    include "../dbcon/dbcon.php";
    $photo_source;
    $resultset=mysqli_query($con, "SELECT * FROM user WHERE user_id = ".$_SESSION["user_login"]);
    $result=mysqli_fetch_assoc($resultset);
    if ($result["profile_photo"]=="") {
        $photo_source="../img/profile_photo.jpg";
    } else {
        $photo_source=$result["profile_photo"];
    }
?>

<?php
    // code for changing profile
    if (isset($_POST['submitProfile'])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $mobileNo = $_POST['mobileno'];
        $address = $_POST['address'];
		if($_FILES["profile"]["name"] == "")
		{
			mysqli_query($con, "UPDATE user SET firstname='$firstName', lastname='$lastName',mobile_no='$mobileNo',addr='$address' WHERE user_id = ".$_SESSION["user_login"]);
			header("location:profile.php");
		}
        else if (move_uploaded_file($_FILES['profile']['tmp_name'], $_SESSION['user_login'].'/'.$_FILES['profile']['name'])) {
            $image =  $_SESSION['user_login'].'/'.$_FILES['profile']['name'];
            $edit = mysqli_query($con, "UPDATE user SET firstname='$firstName', lastname='$lastName', mobile_no='$mobileNo', addr='$address', profile_photo='$image' WHERE user_id= " .$_SESSION['user_login']);
            header('location:index.php');
        }
    }
?>

	<?php include_once "./header.php" ?>
	
	<div class="container text-center">
		<div id="editProfilePage" style="background: #ddd; padding: 1rem; border-radius: 0 0 10px 10px">
			<div style="position: relative">
				<img src="<?php echo $photo_source; ?>" height="120px" width="120px" alt="profile photo" class="rounded-circle"><br>
				<p class="text-uppercase font-weight-bold m-2"><?php echo $result["firstname"]." ".$result["lastname"]; ?></p>
				<a href="#" class="btn btn-primary" data-toggle="modal" 			        	data-target="#editProfile">
					<i class="fas fa-user-edit"></i> Edit Profile
				</a>
			</div>
		  </div>
	</div>

<?php
        $recordset=mysqli_query($con, "SELECT * FROM book WHERE owner_id = ".$_SESSION["user_login"]);
        ?>
		<div class="container">
			<h1 class="text-center mt-3">My Books</h1>
			<hr>
			<div class="card-columns">
					<?php while ($record=mysqli_fetch_assoc($recordset)) { ?>
					
							<div class="card">
								
									<img src="<?php echo $record["photo"]; ?>" class="card-img-top img-fluid" alt="book photos">
									<div class="card-body text-center">
										<h6 class="card-title font-weight-bold"><?php echo "<b>".$record["book_name"]; ?></h6>
										<h6 class="text-muted p-1"><?php echo $record["author"]; ?></h6>
								
										<a href="editbook.php?id=<?php echo $record['book_id']; ?>" class="btn btn-primary mr-2">Edit Book</a>
										<a href="book_delete.php?id=<?php echo $record["book_id"]; ?>" class="btn btn-danger ">Delete Book</a>
									</div>
								
							</div>
					
					<?php } ?>
			</div>	
		</div>		
	<!-- Modal for edit Profile -->
	<div class="modal" id="editProfile">
		<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
			<h5 class="modal-title">Edit Your Profile</h5>
			<button class="close" data-dismiss="modal">
				<span>&times;</span>
			</button>
			</div>
			<div class="modal-body">
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo $photo_source; ?>" alt="" class="img-rounded img-fluid">
						<label for="changephoto" class="mt-3">Select Photo</label>
						<input type="file" name="profile" id="profile" class="">
					</div>
					<div class="col-md-8">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $result['firstname']; ?>">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result['lastname']; ?>">
						<label for="phoneno">Phone NO</label>
						<input type="text" class="form-control" name="mobileno" id="phoneno" value="<?php echo $result['mobile_no']; ?>">
						<label for="address">Address</label>
						<textarea name="address" id="address" class="form-control mb-3"><?php echo $result['addr']; ?></textarea>
					</div>
				</div>
				
				<input type="submit" value="Save Change" class="btn btn-primary float-right" name="submitProfile">
			</form>
			</div>
		</div>
		</div>
	  </div>
	
<script type="text/javascript">
	document.title = "<?php echo $result["firstname"]; ?> | Profile";
</script>
<?php include_once "./footer.php"; ?>



