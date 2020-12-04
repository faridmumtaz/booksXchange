<?php
	session_start();
	require "dbcon/dbcon.php";
	if(isset($_POST["submit"]))
	{
		if($_POST["otp"] == $_SESSION["otp"])
		{
			$enc_pass = md5($_SESSION["password"]);
			if (mysqli_query($con, "INSERT INTO user VALUES(null,'".$_SESSION["email"]."','$enc_pass','".$_SESSION["firstname"]."','".$_SESSION["lastname"]."',null,'".$_SESSION["address"]."','profile_photo.jpg',0)")) 
			{
                $resultset = mysqli_query($con, "SELECT * FROM user WHERE email = '".$_SESSION["email"]."'");
                $c = mysqli_fetch_assoc($resultset);
                mkdir("user/".$c["user_id"]);
                echo "<script> alert('You have registered succesfully!');

						window.location.href = 'index.php?success=reg';
					</script>";
            } 
			else 
			{
                echo "<script> alert('Registration failed. Please try later'); 
						window.location.href = 'index.php?fail=reg';
				</script>";
            }
		}
		else
		{
			echo "<script> alert('An error occurred\nPlease try later');</script>";
		}
	}
?>
<html>
<head>
<body>
	<form method="post">
	You will recieve an OTP in your email shortly. Please type it here:<br><input type="text" name="otp">
	<input type="submit" name="submit">
	</form>
</body>
</html>