<?php
    session_start();
    include "../helper.php";
    include "../dbcon/dbcon.php";
    if (isset($_POST["submit"])) {
        if ($_FILES["cover"]["error"] === UPLOAD_ERR_OK) {
            $v = image_validator(strtolower(pathinfo($_FILES["cover"]["name"], PATHINFO_EXTENSION)), $_FILES["cover"]["size"]);
            if ($v == 1) {
                echo "file type not valid!";
            } elseif ($v == 2) {
                echo "file size not valid!";
            } elseif ($v == 0) {
                move_uploaded_file($_FILES["cover"]["tmp_name"], $_SESSION["user_login"]."/".$_FILES["cover"]["name"]);
            } else {
                echo "An error occurred while uploading file<br>Please try later!";
            }
            if (mysqli_query($con, "INSERT INTO book VALUES(null,".$_SESSION["user_login"].",'".$_POST["bname"]."','".$_POST["aname"]."','".$_POST['descript']."',".$_POST["category"].",'".$_SESSION["user_login"]."/".$_FILES["cover"]["name"]."',null,NOW())")) {
                echo "book added successfully";
                header("location:profile.php");
            } else {
                echo "server error";
            }
        } else {
            echo "invalid file";
        }
    }
?>
		<?php  include "./header.php";
        include "./sidebar.php"; ?>
		<br><br><br>
		
		<div class="col-md-10 mt-4">
			<h1 class="text-center">Add Your Book</h1>
			<div class="w-50 mx-auto">
			<form method="post" enctype="multipart/form-data" onSubmit="return check_Alpha(this)">
				<div class="form-group">
					<input type="text" class="form-control" name="bname" placeholder="Enter book name" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="aname" placeholder="Enter author name" required>
				</div>
				<div class="form-group">
					<textarea name="descript" id="descript" class="form-control" rows="5" cols="5" placeholder="Add descript..." required></textarea>
				</div>
				<div class="form-group">
					<label for="category">Select Category</label>
					<select name="category" id="category" class="form-control" required>
						<option value="">--CATEGORY--</option>
						<option value="1">Science</option>
						<option value="2">Fantasy</option>
						<option value="3">Adventure</option>
						<option value="4">Romance</option>
						<option value="5">Contemporary</option>
						<option value="6">Mystery</option>
						<option value="7">Horror</option>
						<option value="8">Thriller</option>
						<option value="9">History</option>
						<option value="10">Cooking</option>
						<option value="11">Art</option>
						<option value="12">Motivational</option>
						<option value="13">Health</option>
						<option value="14">Travel</option>
						<option value="15">Guide</option>
						<option value="16">Children</option>
					</select>
				</div>
				<div class="form-group">
					<label for="cover">Upload Front Cover Photo</label> 
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="cover" name="cover">
						<label for="image" class="custom-file-label">Choose File</label>
					</div>
					<small class="form-text text-muted">Photo size must be less then 512 KBs.</small>
				</div>
				<input type="submit" name="submit" class="btn btn-outline-dark btn-block mb-4">
			</form>
			</div>
		</div>


</div>
</div>
		
<?php include_once './footer.php'; ?>

<script type="text/javascript">
	document.title = "Add Book";
	function check_Alpha(myform){
		var regex = /^[a-zA-Z ]+$/;
		if(regex.test(myform.bname.value) == false){
			alert("book name must be alphabets only");
			myform.bname.focus();
			return false;
		}
		else if(regex.test(myform.aname.value) == false){
			alert("author name must be alphabets only");
			myform.aname.focus();
			return false;
		}
		else{
			return true;
		}
	}
</script>