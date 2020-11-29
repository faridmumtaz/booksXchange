<?php include_once "./header.php";
    require "../auth/auth.php";
    include "../dbcon/dbcon.php";
?>
<?php
    $book_id = $_GET['id'];
    $books = mysqli_query($con, "SELECT * FROM book WHERE book_id=$book_id");
    $book = mysqli_fetch_assoc($books);
    $bookphoto = $book['photo'];
    $bookname = $book['book_name'];
    $author = $book['author'];
    $descript = $book['descript'];
    $category = $book['category_id'];

    if (isset($_POST['submitBook'])) {
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $descript = $_POST['descript'];
        $category = $_POST['category'];
        $bookPhoto = $_FILES['bookPhoto']['name'];
        $photoPath = $_SESSION['user_login'].'/'.$_FILES['bookPhoto']['name'];
        if ($_FILES["bookPhoto"]["name"]=="") {
            mysqli_query($con, "UPDATE book SET book_name='$bookname', author='$author', descript='$descript', category_id=$category WHERE book_id=$book_id");
            header("location:profile.php");
        } elseif (move_uploaded_file($_FILES['bookPhoto']['tmp_name'], $photoPath)) {
            $updateBook = mysqli_query($con, "UPDATE book SET book_name='$bookname', author='$author', descript='$descript', category_id=$category, photo='$photoPath' WHERE book_id=$book_id");
            header('location:profile.php');
        }
    }
    
?>
<div class="container p-4">
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $bookphoto;?>" alt="" class="img-rounded img-fluid">
                <label for="bookPhoto" class="mt-3">Select Photo</label>
                <input type="file" name="bookPhoto" id="bookPhoto" class="">
            </div>
            <div class="col-md-8">
                <label for="bookname">Book Name</label>
                <input type="text" class="form-control" name="bookname" id="bookname" value="<?php echo $bookname; ?>">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" id="author" value="<?php echo $author; ?>">
                <label for="descript">Add descript</label>
                <textarea name="descript" id="descript" class="form-control" rows="5" cols="5"  required><?php echo $descript; ?></textarea>
                <label for="category">Category</label>
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
                
                <input type="submit" value="Save Change" class="btn btn-primary btn-block float-right mt-3" name="submitBook">
                <a class="btn btn-outline-primary btn-block float-right" href="profile.php">Cancel</a>

            </div>
        </div>
        
        
    </form>
</div>

<?php include_once "./footer.php"; ?>