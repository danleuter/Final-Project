<?php
    require('../config/config.php');
    require('../config/db.php');
    
    // Create Query
    $query = 'SELECT * FROM posts WHERE art_status = 1 ORDER BY art_date DESC';
    // $query2 = 'SELECT * FROM posts WHERE '

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	// Free Result
	mysqli_free_result($result);

	// Close Connection
    mysqli_close($conn);

    include('../assets/inc/header_pages.php');
    include('../assets/inc/navbar_client.php');
?>

<!-- <div class="landing-page-articles"></div> -->
<div class="jumbotron d-flex flex-wrap" style="margin-top: 100px 10px 10px !important;">
    <?php foreach($posts as $post) : ?>
        <div class="card" style="width: 18rem; margin:10px; padding:10px;">
        <img class="card-img-top" src="https://source.unsplash.com/featured/?nature,water,life" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $post['art_title']; ?></h5>
            <p class="card-text"><?php echo $post['art_desc']; ?></p>
            <a href="<?php echo ROOT_URL; ?>pages/articles.php?art_id=<?php echo $post['art_id']; ?>" class="btn btn-sm btn-primary">Read More</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
