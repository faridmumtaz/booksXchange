<?php
    require "../auth/auth.php";
    include "../dbcon/dbcon.php";
    $resultset=mysqli_query($con, "SELECT * FROM book WHERE book_id = ".$_GET["id"]);
    $result=mysqli_fetch_assoc($resultset);
    if (mysqli_query($con, "DELETE FROM book WHERE book_id = ".$_GET["id"])) {
        unlink($result["photo"]);
        header("location:profile.php");
    } else {
        echo "unable to delete";
    }
