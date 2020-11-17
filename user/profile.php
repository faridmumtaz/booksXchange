<?php
	require "../auth/auth.php";
	include "../dbcon/dbcon.php";
	$photo_source;
	$resultset=mysqli_query($con,"SELECT * FROM user WHERE user_id = ".$_SESSION["user_login"]);
	$result=mysqli_fetch_assoc($resultset);
	if($result["profile_photo"]=="")
	{
		$photo_source="../img/profile_photo.jpg";
	}
	else
	{
		$photo_source=$result["profile_photo"];
	}
?>
<html>
	<head>
		<title> Profile </title>
	</head>
	<body>
		<img src="<?php echo $photo_source; ?>" height="100px" width="100px" alt="profile photo"><br>
<?php echo $result["firstname"]." ".$result["lastname"]; ?>
		<br><a href="profile_edit.php">Edit Profile</a>
		<br><br>
		<h1> My Books </h1>
<?php
	$recordset=mysqli_query($con,"SELECT * FROM book WHERE owner_id = ".$_SESSION["user_login"]);
	while($record=mysqli_fetch_assoc($recordset))
	{
?>
		<div style="height:300px;width:200px;border:1px solid blue;display:inline-block">
			<img src="<?php echo $record["photo"]; ?>" height="200px" width="200px" alt="book photos">
<?php
			echo "<b>".$record["book_name"]."</b><br>";
			echo $record["author"];
?>
		<br><a href="book_delete.php?id=<?php echo $record["book_id"]; ?>"><button>Delete</button></a><br>
		<a href="book_edit.php"><button>Edit</button></a>
		</div>
<?php
	}
?>
	</body>
</html>