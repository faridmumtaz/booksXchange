<?php include_once "./header.php";
    require "../auth/auth.php";
    include "../dbcon/dbcon.php";
?>
<?php
    $book_id;
    if (isset($_GET['id'])) {
        $book_id = $_GET['id'];
    
        $books = mysqli_query($con, "SELECT * FROM book WHERE book_id=$book_id");
        while ($book = mysqli_fetch_assoc($books)) {
            $bookphoto = $book['photo'];
            $bookname = $book['book_name'];
            $author = $book['author'];
            $category = $book['category_id'];
        }
    }

    if (isset($_POST['submitBook'])) {
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $bookPhoto = $_FILES['bookPhoto']['name'];
        $photoPath = $_SESSION['user_login'].'/'.$_FILES['bookPhoto']['name'];
        if (move_uploaded_file($_FILES['bookPhoto']['tmp_name'], $photoPath)) {
            $updateBook = mysqli_query($con, "UPDATE book SET book_name='$bookname', author='$author', category=$category, photo='$photoPath' WHERE book_id=$book_id");

            header('location: profile.php');
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
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <?php
                         $categories = mysqli_query($con, "SELECT * FROM category");
                         while ($category = mysqli_fetch_assoc($categories)) {
                             ?>
                             <option value="<?php $category['category_id']; ?>"><?php echo $category['category_name'] ?></option>

                         <?php
                         } ?>
                    ?>
                </select>
                <input type="submit" value="Save Change" class="btn btn-primary btn-block float-right mt-3" name="submitBook">
            </div>
        </div>
        
        
    </form>
</div>

<?php include_once "./footer.php"; ?>