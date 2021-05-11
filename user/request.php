<?php

    require "../auth/auth.php";
    require "../dbcon/dbcon.php";
    
    if(isset($_GET["bid"]))
	{
		mysqli_query($con,"INSERT INTO request VALUES (NULL,".$_GET["bid"].",".$_GET["uid"].")");
	}
	header("location:getit.php?id=".$_GET["bid"]);
?>