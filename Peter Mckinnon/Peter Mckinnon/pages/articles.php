<?php
	require('../config/config.php');
    require('../config/db.php');
    
    include('../assets/inc/art_post.inc.php');
    include('../assets/inc/header_pages.php');
    include('../assets/inc/navbar_client.php');
?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peter Mckinnon</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body> -->

<!-- include navbar using php -->

<div class="landing-page-articles"></div>
<main>
    <div class="jumbotron">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
        <div>
            <h1 class="display-3 article-title"><?php echo $post['art_title']; ?></h1>
            <h3 class="alert-info"><?php echo $post['art_desc']; ?></h3>
            <small class="published-date badge badge-info"><?php echo $post['art_date']; ?></small>
            <p class="lead"><?php echo $post['art_author']; ?></p>
            <hr class="my-4">
        </div>
        <!-- <div class="post-thumbnail-wrap"><img width="1000" height="670" src="https://www.lakwatsero.com/wp-content/uploads/2019/05/Aguinid-Falls-1000x670.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Aguinid Falls" srcset="https://www.lakwatsero.com/wp-content/uploads/2019/05/Aguinid-Falls.jpg 1000w, https://www.lakwatsero.com/wp-content/uploads/2019/05/Aguinid-Falls-300x201.jpg 300w, https://www.lakwatsero.com/wp-content/uploads/2019/05/Aguinid-Falls-768x515.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" />
        </div> -->
        <div class="content-inner-wrap">
            <div><?php echo $post['art_content']; ?></div>     
        </div>
    </div>
</main>
    
</body>
</html>