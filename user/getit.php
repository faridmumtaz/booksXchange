<?php

    require "../auth/auth.php";
    require "../dbcon/dbcon.php";
    
    if (isset($_GET["id"])) {
        $resultset = mysqli_query($con, "SELECT * FROM book WHERE book_id = ".$_GET["id"]);
        $result = mysqli_fetch_assoc($resultset);
        
        $categories = mysqli_query($con, "SELECT * FROM category WHERE category_id = ".$result["category_id"]);
        $category = mysqli_fetch_assoc($categories);
        
        $users = mysqli_query($con, "SELECT * FROM user WHERE user_id = ".$result["owner_id"]);
        $user = mysqli_fetch_assoc($users);
    }
?>
	<?php include_once "./header.php"; ?>
		<div class="container-fluid mt-3 mb-4">
			<div class="" style="border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 5px;">
				<div class="book-info text-center font-weight-bold p-3">
					<h3 class="display-5 text-primary">Book Information</h3>
				</div>
				<div class="row p-3">
					<div class="col-md-4">
						<img src="<?php echo $result['photo']; ?>" class="img-fluid">
					</div>
					<div class="col-md-4">
						<div class="book-title">
							<span class="font-weight-bold">Book Title : </span><h3 class="d-inline"><?php echo $result["book_name"]; ?></h3>
						</div>
						<div class="book-author mt-2">
						    <span class="font-weight-bold">Author : </span><h5 class="d-inline"><?php echo $result["author"]; ?></h5>
						</div>
						<div class="book-description mt-2">
							<span class="font-weight-bold">Description : </span><br><h5 class="d-inline text-muted"><?php echo $result['descript']; ?></h5>
						</div>
						<div class="book-category mt-2">
							<span class="font-weight-bold">Category : </span><h6 class="d-inline"><?php echo $category["category_name"]; ?></h6>
						</div>
					</div>

					<!-- Owner of book -->
					<div class="col-md-4">
						<h3 class="">Owner of book </h3>
						<div class="owner-name">
							<span class="font-weight-bold">Name : </span><h5 class="d-inline font-italic"><?php echo $user["firstname"]." ".$user["lastname"]; ?><h5>
						</div>
						<div class="owner-address mt-2">
							<span class="font-weight-bold">Address : </span><p class="d-inline"><?php echo $user["addr"]; ?></p>
						</div>
						<div class="owner-mobile mt-2">
							<span class="font-weight-bold">Mobile No : </span><p class="d-inline"><?php echo $user["mobile_no"]; ?></p>
						</div>
						<div class="owner-email">
							<span class="font-weight-bold">Email : </span><p class="d-inline"><?php echo $user["email"]; ?></p>
						</div>
					</div>
				</div>	
			</div>
		</div>

</body>
</html>
		
	
