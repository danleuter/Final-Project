<?php

	require('../config/config.php');
    require('../config/db.php');
    
    include('inc/profile.inc.php');
    
    if ( isset( $_SESSION['userId'] ) ) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
    } else {
        // Redirect them to the login page
        header('Location: ' .ROOT_URL_ADMIN.'dashboard/loginandregister.php');
        //echo 'error';
    }

    if(isset($_POST['delete'])){


        // Get form data text
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    
    
    
        $query = "DELETE FROM posts WHERE art_id = {$delete_id}";
    
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL_ADMIN.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    };
    

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
    
    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETER MCKINNON - dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
   
        <?php 
            include('inc/navbar.php');
            
           ?>

<div class="sidebar">
    <div class="list-group">
            <a href="<?php echo ROOT_URL_ADMIN; ?>index.php" class="list-group-item list-group-item-action active">
                Published Articles
            </a>
            <a href="<?php echo ROOT_URL_ADMIN; ?>inc/draft_post_dashboard.php" class="list-group-item list-group-item-action">Draft Articles
            </a>
            <a href="<?php echo ROOT_URL_ADMIN; ?>inc/pool_of_ideas.php" class="list-group-item list-group-item-action">Pool of Ideas
            </a>
            <a href="<?php echo ROOT_URL_ADMIN; ?>inc/profile_dash.php" class="list-group-item list-group-item-action">Profile
            </a>
            <a href="#" class="list-group-item list-group-item-action">Messages
            </a>
    </div>
</div>

   
<!-- Main Body -->
<main class="dashboard-bg"></main> 

<!--
// if (isset($_SESSION['userId'])) {
//     echo "<p class='login-status' >You are Logged In! </p>";
// }
// else {
//     echo "<p class='login-status' >You are Logged out! </p>";
// }-->



<!-- articles -->
<article class="published-articles">   
        <div class="articles">
            <?php foreach($posts as $post) : ?>
                <div class="card-box">
                    <div class="cards border-success mb-3 d-flex">
                        <div class="article-thumbnail"></div>
                        <div class="card-content">
                            <div class="card-header d-flex justify-content-between">
                                <div class=" author">Authored by: <h4><?php echo $post['art_author']; ?></h4><small class="badge outline-primary">on <?php echo $post['art_date']; ?></small>
                                </div>
                                <div class='d-flex flex-column'>
                                    <div class="btn btn-sm btn-info"><a href="<?php echo ROOT_URL_ADMIN; ?>dashboard/update.php?art_id=<?php echo $post['art_id']; ?>">Edit</a></div>
                                    <form class="buttons" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type='hidden' name="delete_id" value="<?php echo $post['art_id']; ?>">
                                        <input type="submit" name="delete" value="Delete" class='btn btn-sm btn-danger'>
                                    </form>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $post['art_title']; ?></h4>
                                     <div class="card-text"><?php echo $post['art_desc']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
    





</main>
<!-- Main Body -->



  
<script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
  
    $(document).on('click', '.list-group .list-group-item', function(){
      $(this).addClass('active').siblings().removeClass('active')

      
  });
  

  // $('button').toggle(function(){
  //         $('#B)').css('left', '0')
  //     }, function(){
  //         $('#B').css('left', '200px')
  //     })



</script>

 <?php include('inc/footer.php'); ?>

</body>
</html>