<?php
	require('../../config/config.php');
	require('../../config/db.php');

	// Check For Submit
	if(isset($_POST['submit1'])){


        // Get form data text
        $title = mysqli_real_escape_string($conn, $_POST['art_title']);
        $desc = mysqli_real_escape_string($conn, $_POST['art_desc']);
        $body = mysqli_real_escape_string($conn, $_POST['art_content']);
        // $date = mysqli_real_escape_string($conn, $_POST['art_date']);
        $author = mysqli_real_escape_string($conn, $_POST['art_author']);
        
        // Get form data files
        $image = $_FILES['art_image']['name'];
        $image_tmp =  $_FILES['art_image']['tmp_name'];

        move_uploaded_file($image_tmp, "../images/$image");
        

		$query = "INSERT INTO posts (art_title, art_author, art_desc, art_content, art_image, art_status) VALUES('$title', '$author', '$desc', '$body', '$image',  1)";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL_ADMIN.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
    };

    if(isset($_POST['submit2'])){
        //Get form data
		$title = mysqli_real_escape_string($conn, $_POST['art_title']);
        $body = mysqli_real_escape_string($conn, $_POST['art_content']);
        $desc = mysqli_real_escape_string($conn, $_POST['art_desc']);
        $author = mysqli_real_escape_string($conn, $_POST['art_author']);
        $image = mysqli_real_escape_string($conn, $_FILES['art_image']['name']);

        $query = "INSERT INTO posts(art_title, art_author, art_desc, art_content, art_image, art_status) VALUES('$title', '$author', '$desc', '$body', '$image',  2)";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL_ADMIN.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
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
                            <li class="menu-btn"><a href="index.php">Home</a></li>
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
                <input type="text" class="form-control" name="art_title" placeholder="Title"/></h6>
                <h6 class="card-title"><label>Description</label>
                <input type="text" class="form-control" name="art_desc" placeholder="Short Description"/></h6>
                <h6 class="card-title"><label>Author</label>
                <input type="text" class="form-control" name="art_author" placeholder="Peter Mckinnon"/></h6>
                <h6 class="card-title"><label>Category</label>
                <input type="text" class="form-control" name="art_category" placeholder="Category"/></h6>
                <h6 class="card-title"><label>Upload Thumbnail</label>
                <div class="input-group-append"><input class="input-group-text" type="file" name="art_image">
                </div></h6>
                <hr class="my-4">
                <h6 class="card-title"><label>Content</label></h6>
                <textarea class="text-primary" id="editor" name="art_content" placeholder="Some quick example text to build on the card title and make up the bulk of the card's content."></textarea>
                <hr class="my-4">
                <input type="submit" name="submit1" value="Publish Now" class="btn btn-outline-success"/>
                <input type="submit" name="submit2" value="Save to Draft" class="btn btn-outline-info"/>
                <button type="button" class="btn btn-outline-danger">Cancel</button>
            </div>
        </div>
    </form>


    




<script>

var editor = new Jodit('#editor');
editor.value = '';

// $('textarea').each(function () {
//     var editor = new Jodit(this);
//     editor.value = '<p>start</p>';
// });
</script>

</body>
</html>