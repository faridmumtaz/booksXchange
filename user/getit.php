<?php

	require "../auth/auth.php";
	require "../dbcon/dbcon.php";
	
	if(isset($_GET["id"]))
	{
		$resultset = mysqli_query($con,"SELECT * FROM book WHERE book_id = ".$_GET["id"]);
		$result = mysqli_fetch_assoc($resultset);
		
		$categories = mysqli_query($con,"SELECT * FROM category WHERE category_id = ".$result["category_id"]);
		$category = mysqli_fetch_assoc($categories);
		
		$users = mysqli_query($con,"SELECT * FROM user WHERE user_id = ".$result["owner_id"]);
		$user = mysqli_fetch_assoc($users);
	}
?>
<html>
<head></head>
<body>
book info:<br>
<img src="<?php echo $result["photo"]; ?>" height="400px" width="300px"><br>
Book Title:<h3><?php echo $result["book_name"]; ?></h3><br>
Author:<h5><?php echo $result["author"]; ?></h5><br>
Description:<p><?php echo $result["descript"]; ?></p><br>
Category:<p><?php echo $category["category_name"]; ?></p><br><br>
owner: <br>
Name:<h5><?php echo $user["firstname"]." ".$user["lastname"]; ?><h5>
Address: <p><?php echo $user["addr"]; ?></p>
Mobile No.: <p><?php echo $user["mobile_no"]; ?></p>
Email: <p><?php echo $user["email"]; ?></p>
</body>
</html>