<?php
	require('../../config/config.php');
	require('../../config/db.php');

	// Check For Submit
	if(isset($_POST['submit1'])){


        // Get form data text
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['art_title']);
        $desc = mysqli_real_escape_string($conn, $_POST['art_desc']);
        $body = mysqli_real_escape_string($conn, $_POST['art_content']);
        $art_category = mysqli_real_escape_string($conn, $_POST['art_category']);
        $author = mysqli_real_escape_string($conn, $_POST['art_author']);
        
        // Get form data files
        // $image = $_FILES['art_image']['name'];
        // $image_tmp =  $_FILES['art_image']['tmp_name'];

        // move_uploaded_file($image_tmp, "../images/$image");
        

		$query = "UPDATE posts SET 
                    art_title='$title',
                    art_author='$author',
                    art_desc='$desc',
                    art_category='$art_category',
                    art_content='$body' 
                        WHERE art_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL_ADMIN.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
    }

    if(isset($_POST['submit2'])){
        //Get form data
		$title = mysqli_real_escape_string($conn, $_POST['art_title']);
        $body = mysqli_real_escape_string($conn, $_POST['art_content']);
        $art_category = mysqli_real_escape_string($conn, $_POST['art_category']);
        $desc = mysqli_real_escape_string($conn, $_POST['art_desc']);
        $author = mysqli_real_escape_string($conn, $_POST['art_author']);
        $image = mysqli_real_escape_string($conn, $_FILES['art_image']['name']);

        $query = "UPDATE posts SET 
                    art_title='$title',
                    art_author='$author',
                    art_desc='$desc',
                    art_category='$art_category',
                    art_content='$body' 
                        WHERE art_id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL_ADMIN.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
    }

    // get ID
	$art_id = mysqli_real_escape_string($conn, $_GET['art_id']);

	// Create Query
	$query = 'SELECT * FROM posts WHERE art_id = '.$art_id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peter Mckinnon</title>
    
 <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/jodit.min.css">
    <script src="../js/jodit.min.js"></script>

</head>
<body>

<!-- include navbar using php -->
    <nav class="menu-web">
        <div class="menu-container">
            <div class="brand-name" >
                <p class="logo"><a href="index.html">Peter Mckinnon</a></p>
            </div>
            <div class="navbar-menu">
                <div class="search-bar"><input type="search" name="" id="article-search" placeholder="Search"></div>
                    <ul>
                        <!-- <li><input type="search" name="" id="article-search" placeholder="Search"></li> -->
                        <li class="menu-btn"><a href="#">Articles</a></li>
                        <li class="menu-btn"><a href="#">Profile</a></li>
                        <li class="menu-btn"><a href="#">Contact</a></li>
                    </ul>
            </div>
        </div>
        <div class="menu-wrap-hamburger">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="menu">
                <div>
                    <div>
                        <ul class="search-bar-right">
                            <li class="menu-btn"><a href="pages/index.php">Home</a></li>
                            <li class="menu-btn"><a href="#">Articles</a></li>
                            <li class="menu-btn"><a href="#">Profile</a></li>
                            <li class="menu-btn"><a href="#">Contact</a></li>
                            <li><input type="search" name="" id="article-search" placeholder="Search"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <form class="create-article" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="article-editor text bg-primary mb-3">
            <!-- <div class="card-header">What's going on?</div> -->
            <div class="card-body">
                <h6 class="card-title"><label>Title</label>
                <input type="text" class="form-control" name="art_title" value="<?php echo $post['art_title']; ?>"/></h6>
                <h6 class="card-title"><label>Description</label>
                <input type="text" class="form-control" name="art_desc"  value="<?php echo $post['art_desc']; ?>"/></h6>
                <h6 class="card-title"><label>Author</label>
                <input type="text" class="form-control" name="art_author"  value="<?php echo $post['art_author']; ?>"/></h6>
                <h6 class="card-title"><label>Category</label>
                <input type="text" class="form-control" name="art_category" value="<?php echo $post['art_category']; ?>"/></h6>
                <h6 class="card-title"><label>Upload Thumbnail</label>
                <div class="input-group-append"><input class="input-group-text" type="file" name="art_image">
                </div></h6>
                <hr class="my-4">
                <h6 class="card-title"><label>Content</label></h6>
                <textarea class="text-primary" id="editor" name="art_content" ><?php echo $post['art_content']; ?></textarea>
                <hr class="my-4">
                <input type="hidden" name="update_id" value="<?php echo $post['art_id']; ?>" />
                <input type="submit" name="submit1" value="publish" class="btn btn-outline-success"/>
                <input type="hidden" name="drafts" value="<?php echo $post['art_id']; ?>" />
                <input type="submit" name="submit2" value="Save to Draft" class="btn btn-outline-info"/>
                <a href='<?php echo ROOT_URL_ADMIN; ?>' type="button" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>
    </form>


    




<script>

var editor = new Jodit('#editor');
editor.value = '<?php echo $post['art_content']; ?>';

</script>

</body>
</html>