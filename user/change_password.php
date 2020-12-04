<?php
	require "../auth/auth.php";
	require "../dbcon/dbcon.php";
	if(isset($_POST["submit"]))
	{
		if($_POST["password"] == $_POST["confirm"])
		{
			$enc_pass = md5($_POST["password"]);
			if(mysqli_query($con,"UPDATE user SET password = '$enc_pass' WHERE user_id = ".$_SESSION["user_login"]))
			{
				echo "<script>alert('password changed succesfully\nPlease login again'); 
				window.location.href = 'profile.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert('An error occurred!\nPlease try later'); </script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'> alert('email and confirm does not match'); </script>";
		}
	}
	

?>


<html>
<head>
</head>
<body>
<form method="post">
<input type="password" name="password" placeholder="Enter New Password" required>
<input type="password" name="confirm" placeholder="Re-enter New Password" required>
<input type="submit" name="submit">
</form>
</body>
</html>