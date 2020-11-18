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



	<?php include_once "./header.php" ?>
	
	<div class="container text-center">
		<div id="editProfilePage" style="background: #ddd; padding: 1rem; border-radius: 0 0 10px 10px">
			<div style="position: relative">
				<img src="<?php echo $photo_source; ?>" height="120px" width="120px" alt="profile photo" class="rounded-circle"><br>
				<p class="text-uppercase font-weight-bold m-2"><?php echo $result["firstname"]." ".$result["lastname"]; ?></p>
				<a href="#" class="btn btn-success" data-toggle="modal" 			        	data-target="#editProfile">
					<i class="fas fa-user-edit"></i> Edit Profile
				</a>
			</div>
		  </div>
	</div>

<?php
        $recordset=mysqli_query($con, "SELECT * FROM book WHERE owner_id = ".$_SESSION["user_login"]);
        ?>
		<div class="container">
		<div class="row">
				<?php while ($record=mysqli_fetch_assoc($recordset)) { ?>
				
				
					<div class="col-md-4">
						<div class="card">
							
								<img src="<?php echo $record["photo"]; ?>" class="card-img-top" alt="book photos">
							<?php
                                ?>
								<div class="card-body text-center">
									<h6 class="card-title font-weight-bold"><?php echo "<b>".$record["book_name"]; ?></h6>
									<h6 class="text-muted p-1"><?php echo $record["author"]; ?></h6>
							
									<a href="book_edit.php" class="btn btn-primary mr-2">Edit Book</a>
									<a href="book_delete.php?id=<?php echo $record["book_id"]; ?>" class="btn btn-danger ">Delete Book</a>
								</div>
							
						</div>
					</div>
				
			
			<?php } ?>
			</div>
		</div>		
<?php
                
?>

<script type="text/javascript">
	document.title = "<?php echo $result["firstname"]; ?> | Profile";
</script>


