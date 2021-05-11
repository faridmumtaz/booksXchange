<?php
    session_start();
    include "../dbcon/dbcon.php";
	if(mysqli_query($con,"INSERT INTO book VALUES(NULL,28,'dfosf','dfjdgj','13','fdf',NULL,NOW())"))
	{
		echo "ok";
	}
	else
	{
		echo "no";
	}
?>