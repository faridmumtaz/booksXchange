<?php

    require "../auth/auth.php";
    require "../dbcon/dbcon.php";
    
    mysqli_query($con, "DELETE FROM request WHERE user_id = ".$_GET["uid"]);
	header("location:getit.php?id=".$_GET["bid"]);
?>